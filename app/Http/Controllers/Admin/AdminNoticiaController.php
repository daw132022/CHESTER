<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\ImageNoticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminNoticiaController extends Controller
{
    public function index(Noticia $noticias)
    {
        $noticias = Noticia::paginate(10);
        return view('admin.noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('admin.noticias.add');
    }

    public function add(Request $request, Noticia $noticias)
    {
        $validator = Validator::make($request->all(), [
            'titulo_noticia' => 'required|string|max:255',
            'fecha' => 'required|date',
            'categoria' => 'required|string|max:255',
            'texto_noticia' => 'required|string|max:4000',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $noticia = Noticia::create([

            'titulo_noticia' => $request->get('titulo_noticia'),
            'fecha' => $request->get('fecha'),
            'categoria' => $request->get('categoria'),
            'texto_noticia' => $request->get('texto_noticia')]
        );

            if($request->has('images')){
                foreach ($request->file('images') as $image){
                   $imageName = $noticia['titulo_noticia'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                    $image->move(public_path('noticia_images'), $imageName);
                    ImageNoticia::create([
                        'noticia_id'=>$noticia->id,
                        'image'=>$imageName
                    ]);
                }
            }

        return redirect('admin/news');

    }

    public function show( $id)
    {
        $noticia = Noticia::findOrFail($id);
        $images = $noticia->images;
        return view('admin.noticias.show', compact('noticia', 'images'));
    }

    public function edit( $id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('admin.noticias.edit', compact('noticia'));
    }

    public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo_noticia' => 'required|string|max:255',
            'fecha' => 'required|date',
            'categoria' => 'required|string|max:255',
            'texto_noticia' => 'required|string|max:4000',
            'imagenes_noticia.*' => 'image|max:4096',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $noticia = Noticia::findOrFail($id);

        $noticia->titulo_noticia = $request->get('titulo_noticia');
        $noticia->fecha = $request->get('fecha');
        $noticia->categoria = $request->get('categoria');
        $noticia->texto_noticia = $request->get('texto_noticia');

        $noticia->save();

        $image_noticias = ImageNoticia::where('noticia_id', $id)->get();
        $imagenes_noticia = $request->file('imagenes_noticia');

        if ($imagenes_noticia) {
            foreach ($image_noticias as $image_noticia) {
                $previousImage = $image_noticia->image;
                if ($previousImage && file_exists(public_path('noticia_images/' . $previousImage))) {
                    unlink(public_path('noticia_images/' . $previousImage));
                }
                $image_noticia->delete();
            }

            foreach ($imagenes_noticia as $imagen) {
                $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('noticia_images'), $nombreImagen);

                $image_noticia = new ImageNoticia();
                $image_noticia->image = $nombreImagen;
                $image_noticia->noticia_id = $id;
                $image_noticia->save();
            }
        }

        return redirect('admin/news');
    }



    public function delete(Request $request, $id, Noticia $noticias)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete($request->all());

        return redirect('admin/news');

    }


}





