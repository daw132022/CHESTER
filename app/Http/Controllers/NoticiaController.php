<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Image;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoticiaController extends Controller
{

    public function listNoticias()
    {
        //$noticias = Noticia::all();
        $noticias = Noticia::paginate(10)->onEachSide(1);
        //return response()->json(['message'=>null,'data'=>$noticias],200);
        return view('noticias.index', compact('noticias'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $noticias = Noticia::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('titulo_noticia', 'LIKE', '%' . $query . '%')
                ->orWhere('categoria', 'LIKE', '%' . $query . '%');
        }) ->paginate(10);

        return view('noticias.index', compact('noticias'));
    }


    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        $comentarios = Comentario::where('noticia_id', $id)->get();

        return view('noticias.show', compact('noticia', 'comentarios'));
    }


    /*    public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'titulo_noticia' => 'required|string|max:255',
                'fecha' => 'required|date',
                'categoria' => 'required|string|max:255',
                'texto_noticia' => 'required|string|max:255',
                'image_noticia' => 'required|max:4096',

            ]);
            if($validator->fails()){
                return response()->json($validator->messages(), 400);

            }

            $input = $request->all();
            $noticia = new Noticia($input);
            $noticia->image_noticia = 'images/' . $request->file('image_noticias')->getClientOriginalName(); //Ruta que se guarda en la tabla de noticias en el campo de images
            $request->file('image_noticias')->move("images/", $request->file('image_noticias')->getClientOriginalName()); //Indicamos la ruta a la carpeta dondde queremos mover la imagen
            $noticia->save();


            $image = new Image();
            $image->image_noticia = $request->file('image_noticias')->getClientOriginalName();
            $image->noticia_id = $noticia->id;
            $image->save();

            $noticia = Noticia::create([
                'titulo_noticia' => $request->get('titulo_noticia'),
                'fecha' => $request->get('fecha'),
                'categoria' => $request->get('categoria'),
                'texto_noticia' => $request->get('texto_noticia'),
                'image_noticia' => $request->get('image_noticia'),

            ]);


            return response()->json(['message'=>'Noticia Created','data'=>$noticia],200);
        }

*/



}
