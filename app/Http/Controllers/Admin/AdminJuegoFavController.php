<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JuegoFav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminJuegoFavController extends Controller
{
    public function index(Request $request, $id)
    {
        $juegos_fav = JuegoFav::where('user_id', $id)
            ->paginate(10);

        return view('admin.juegos_fav.index', compact('juegos_fav'));
    }

    public function create()
    {
        return view('admin.juegos_fav.add');
    }

    public function add(Request $request, JuegoFav $juegos_fav)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'juego_id' => 'required|integer',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $juego_fav = JuegoFav::create([
            'user_id' => $request->get('user_id'),
            'juego_id' => $request->get('juego_id'),
        ]);
        return redirect('admin/user/gamesfav/'.$request->get('user_id'));
    }

    public function show(JuegoFav $juego_fav)
    {

        return view('admin.juegos_fav.show', compact('juego_fav'));
    }

    public function edit( $id)
    {
        $juego_fav = JuegoFav::findOrFail($id);
        return view('admin.juegos_fav.edit', compact('juego_fav'));
    }

    public function editar(Request $request, $id, JuegoFav $juegos_fav )
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'juego_id' => 'required|integer',
        ]);

        JuegoFav::where('id', $id)
            ->update([
                    'user_id' => $request->get('user_id'),
                    'juego_id' => $request->get('juego_id'),]
            );
        return redirect('admin/user/gamesfav/'.$request->get('user_id'));

    }


    public function delete(Request $request, $juego)
    {
        $juego_fav = JuegoFav::findOrFail($juego);
        $juego_fav->delete();

        return redirect('admin/user/gamesfav/'.$juego_fav->user_id);
    }

}
