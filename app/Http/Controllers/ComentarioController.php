<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComentarioController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'noticia_id' => 'required|int',
            'user_id' => 'required|int',
            'texto' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Comentario::create([
            'noticia_id' => $request->input('noticia_id'),
            'user_id' => $request->input('user_id'),
            'texto' => $request->input('texto'),
        ]);

        return redirect()->back()->with('success', 'Comentario creado exitosamente');
    }


    public function edit($id)
    {
        $comentario = Comentario::findOrFail($id);

        return view('comentarios.edit', compact('comentario'));
    }

    public function update(Request $request, $id)
    {
        $comentario = Comentario::findOrFail($id);


        $request->validate([
            'texto' => 'required|string|max:255',
        ]);

        $comentario->texto = $request->input('texto');
        $comentario->save();

        return redirect()->back()->with('success', 'Comentario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);

        if (auth()->user()->id != $comentario->user_id) {
            return back()->with('error', 'No tienes permiso para eliminar este comentario.');
        }

        $comentario->delete();

        return back()->with('success', 'Comentario eliminado exitosamente.');
    }


}
