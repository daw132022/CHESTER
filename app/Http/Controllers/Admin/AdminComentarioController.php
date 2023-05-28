<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminComentarioController extends Controller
{

    public function index(Request $request, $id)
    {
        $comentarios = Comentario::where('user_id', $id)->paginate(10);

        return view('admin.comentarios.index', compact('comentarios'));
    }


    public function create()
    {
        return view('admin.comentarios.add');
    }

    public function add(Request $request, Comentario $comentarios)
    {
        $validator = Validator::make($request->all(), [
            'texto' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'noticia_id' => 'required|integer',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $comentario = Comentario::create([
            'texto' => $request->get('texto'),
            'user_id' => $request->get('user_id'),
            'noticia_id' => $request->get('noticia_id'),
        ]);
        return redirect('admin/user/comments/'.$request->get('user_id'));
    }

    public function show(Comentario $comentario)
    {

        return view('admin.comentarios.show', compact('comentario'));
    }

    public function edit( $id)
    {
        $comentario = Comentario::findOrFail($id);
        return view('admin.comentarios.edit', compact('comentario'));
    }

    public function editar(Request $request, $id, Comentario $comentarios )
    {
        $validator = Validator::make($request->all(), [
            'texto' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'noticia_id' => 'required|integer',
        ]);

            Comentario::where('id', $id)
            ->update([ 'texto' => $request->get('texto'),
                    'user_id' => $request->get('user_id'),
                    'noticia_id' => $request->get('noticia_id'),]
            );
        return redirect('admin/user/comments/'.$request->get('user_id'));

    }

    public function delete(Request $request, Comentario $comentario)
    {
        $comentarios = Comentario::findOrFail($comentario->id);
        $comentarios->delete($request->all());

        return redirect('admin/user/comments/'.$comentario->user_id);

    }
}
