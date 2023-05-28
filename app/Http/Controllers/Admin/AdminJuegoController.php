<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageJuego;
use App\Models\Juego;
use App\Models\PdfJuego;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminJuegoController extends Controller
{
    public function index()
    {
        $juegos = Juego::paginate(10);
        return view('admin.juegos.index', compact('juegos'));
    }

    public function create()
    {
        return view('admin.juegos.add');
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo_juego' => 'required|string|max:255',
            'max_jugadores' => 'required|integer',
            'min_jugadores' => 'required|integer',
            'tiempo_juego' => 'required|integer',
            'descripccion' => 'required|string|max:4000',
            'images.*' => 'image|max:4096',
            'pdfs.*' => 'mimes:pdf|max:10000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $juego = Juego::create([
            'titulo_juego' => $request->get('titulo_juego'),
            'max_jugadores' => $request->get('max_jugadores'),
            'min_jugadores' => $request->get('min_jugadores'),
            'tiempo_juego' => $request->get('tiempo_juego'),
            'descripccion' => $request->get('descripccion'),
        ]);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $juego->titulo_juego . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('juego_images'), $imageName);
                ImageJuego::create([
                    'juego_id' => $juego->id,
                    'image' => $imageName
                ]);
            }
        }

        if ($request->has('pdfs')) {
            foreach ($request->file('pdfs') as $pdf) {
                $pdfName = $juego->titulo_juego . '-pdf-' . time() . rand(1, 1000) . '.' . $pdf->extension();
                $pdf->move(public_path('juego_pdfs'), $pdfName);

                PdfJuego::create([
                    'juego_id' => $juego->id,
                    'pdf' => $pdfName
                ]);
            }
        }

        return redirect('admin/games');
    }

    public function show($id)
    {
        $juego = Juego::with('pdfs')->findOrFail($id);
        $images = $juego->images;
        $pdfs = $juego->pdfs;

        return view('admin.juegos.show', compact('juego', 'images', 'pdfs'));
    }


    public function edit($id)
    {
        $juego = Juego::findOrFail($id);
        return view('admin.juegos.edit', compact('juego'));
    }

    public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo_juego' => 'required|string|max:255',
            'max_jugadores' => 'required|integer',
            'min_jugadores' => 'required|integer',
            'tiempo_juego' => 'required|integer',
            'descripccion' => 'required|string|max:4000',
            'imagenes_juego.*' => 'image|max:4096',
            'pdf_reglas_juego' => 'file|mimes:pdf|max:4096',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $juego = Juego::findOrFail($id);

        $juego->titulo_juego = $request->get('titulo_juego');
        $juego->max_jugadores = $request->get('max_jugadores');
        $juego->min_jugadores = $request->get('min_jugadores');
        $juego->tiempo_juego = $request->get('tiempo_juego');
        $juego->descripccion = $request->get('descripccion');

        $juego->save();

        $image_juegos = ImageJuego::where('juego_id', $id)->get();
        $imagenes_juego = $request->file('imagenes_juego');

        if ($imagenes_juego) {
            foreach ($image_juegos as $image_juego) {
                $previousImage = $image_juego->image;
                if ($previousImage && file_exists(public_path('juego_images/' . $previousImage))) {
                    unlink(public_path('juego_images/' . $previousImage));
                }
                $image_juego->delete();
            }

            foreach ($imagenes_juego as $imagen) {
                $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('juego_images'), $nombreImagen);

                $image_juego = new ImageJuego();
                $image_juego->image = $nombreImagen;
                $image_juego->juego_id = $id;
                $image_juego->save();
            }
        }

        if ($request->hasFile('pdf_reglas_juego')) {
            $pdfFile = $request->file('pdf_reglas_juego');
            $nombrePdf = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfFile->move(public_path('juego_pdfs'), $nombrePdf);


            $pdf = PdfJuego::where('juego_id', $id)->first();
            if ($pdf) {

                Storage::disk('public')->delete('juego_pdfs/' . $pdf->pdf);

                $pdf->pdf = $nombrePdf;
                $pdf->save();
            } else {

                $pdf = new PdfJuego();
                $pdf->pdf = $nombrePdf;
                $pdf->juego_id = $id;
                $pdf->save();
            }
        }

        return redirect('admin/games');
    }




    /*public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo_juego' => 'required|string|max:255',
            'max_jugadores' => 'required|integer',
            'min_jugadores' => 'required|integer',
            'tiempo_juego' => 'required|integer',
            'descripccion' => 'required|string|max:255',
            'imagenes_juego.*' => 'image|max:4096',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $juego = Juego::findOrFail($id);

        $juego->titulo_juego = $request->get('titulo_juego');
        $juego->max_jugadores = $request->get('max_jugadores');
        $juego->min_jugadores = $request->get('min_jugadores');
        $juego->tiempo_juego = $request->get('tiempo_juego');
        $juego->descripccion = $request->get('descripccion');

        $juego->save();

        $image_juegos = ImageJuego::where('juego_id', $id)->get();
        $imagenes_juego = $request->file('imagenes_juego');

        if ($imagenes_juego) {
            foreach ($image_juegos as $image_juego) {
                $previousImage = $image_juego->image;
                if ($previousImage && file_exists(public_path('juego_images/' . $previousImage))) {
                    unlink(public_path('juego_images/' . $previousImage));
                }
                $image_juego->delete();
            }

            foreach ($imagenes_juego as $imagen) {
                $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('juego_images'), $nombreImagen);

                $image_juego = new ImageJuego();
                $image_juego->image = $nombreImagen;
                $image_juego->juego_id = $id;
                $image_juego->save();
            }
        }

        return redirect('admin/games');
    }*/


    public function delete($id)
    {
        $juego = Juego::findOrFail($id);
        $juego->delete();

        return redirect('admin/games');
    }
}
