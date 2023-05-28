<?php

namespace App\Http\Controllers;


use App\Models\Juego;
use App\Models\JuegoFav;
use Illuminate\Http\Request;


class JuegoController extends Controller
{
 /*   public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo_juego' => 'required|string|max:255',
            'max_jugadores' => 'required|int',
            'min_jugadores' => 'required|int',
            'tiempo_juego' => 'required|int',
            'descripccion' => 'required|string|max:255',
            'reglas_juego' => 'required|string|max:255',
            'juego_fav' => 'required|string|max:255',

        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $juego = Juego::create([
            'titulo_juego' => $request->get('titulo_juego'),
            'max_jugadores' => $request->get('max_jugadores'),
            'min_jugadores' => $request->get('min_jugadores'),
            'tiempo_juego' => $request->get('tiempo_juego'),
            'descripccion' => $request->get('descripccion'),
            'reglas_juego' => $request->get('reglas_juego'),
            'juego_fav' => $request->get('juego_fav'),


        ]);
        return response()->json(['message'=>'Juego Created','data'=>$juego],200);
    }*/

    public function listJuegos()
    {
        //$juegos = Juego::all();
        $juegos = Juego::paginate();

        //return response()->json(['message'=>null,'data'=>$juegos],200);
        return view('juegos.index', compact('juegos'));
    }

    public function search(Request $request)
    {
        $titulo = $request->input('titulo_juego');

        $juegos = Juego::where('titulo_juego', 'LIKE', '%' . $titulo . '%')
            ->paginate(10);

        return view('juegos.index', compact('juegos'));
    }


/*    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        $images = $juego->images;
        $pdfs = $juego->pdfs;

        $pdf = $pdfs && $pdfs->count() > 0 ? $pdfs->first() : null;

        return view('juegos.show', compact('juego', 'images', 'pdf'));
    }*/

/*    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        $images = $juego->images;
        $pdf = $juego->pdfs->first();

        return view('juegos.show', compact('juego', 'images', 'pdf'));
    }*/

    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        $images = $juego->images;
        $pdf = $juego->pdfs;

        return view('juegos.show', compact('juego', 'images', 'pdf'));
    }




    public function marcarFavorito(Request $request, Juego $juego)
    {
        $favorito = $request->input('favorito') === 'true';
        $user = Auth()->user();

        $esFavorito = JuegoFav::where('user_id', $user->id)
            ->where('juego_id', $juego->id)
            ->exists();

        if ($favorito && !$esFavorito) {
            JuegoFav::create([
                'user_id' => $user->id,
                'juego_id' => $juego->id,
            ]);
        } elseif (!$favorito && $esFavorito) {
            JuegoFav::where('user_id', $user->id)
                ->where('juego_id', $juego->id)
                ->delete();
        }

        return redirect()->to('juego/show/' . $juego->id);
    }




}
