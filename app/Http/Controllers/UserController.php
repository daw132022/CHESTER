<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\JuegoFav;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class UserController extends Controller
{


    public function perfil($id)
    {

        $user = User::findOrFail($id);
        $juegos_fav = JuegoFav::where('user_id', $id)->get();

        return view('users.index', compact('user', 'juegos_fav'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'nombre_usuario' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->nombre = $request->input('nombre');
        $user->apellidos = $request->input('apellidos');
        $user->nombre_usuario = $request->input('nombre_usuario');
        $user->telefono = $request->input('telefono');
        $user->direccion = $request->input('direccion');
        $user->email = $request->input('email');

        $password = $request->input('password');
        if (!empty($password)) {
            $user->password = Hash::make($password);
        }

        $user->save();

        return redirect()->route('perfil', ['user' => $id]);
    }


    public function addComment(Request $request)
    {

        $request->validate([
            'texto' => 'required',
            'noticia_id' => 'required',
            'user_id' => 'required',
        ]);


        $comentario = new Comentario();
        $comentario->texto = $request->texto;
        $comentario->noticia_id = $request->noticia_id;
        $comentario->user_id = $request->user_id;


        $comentario->save();


        return redirect()->back()->with('success', 'Comentario agregado exitosamente.');
    }




    /*    public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'nombre' => 'required|string|max:255',
                'apellidos' => 'required|string|max:255',
                'nombre_usuario' => 'required|string|max:255',
                'telefono' => 'required|string|min:15',
                'direccion' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'c_password' => 'required|same:password',
            ]);
            if($validator->fails()){
                return response()->json($validator->messages(), 400);
            }
            $user = User::create([
                'nombre' => $request->get('nombre'),
                'apellidos' => $request->get('apellidos'),
                'nombre_usuario' => $request->get('nombre_usuario'),
                'telefono' => $request->get('telefono'),
                'direccion' => $request->get('direccion'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
            return response()->json(['message'=>'User Created','data'=>$user],200);
        }

    */


  /*  public function show(User $user)
    {
        return response()->json(['message'=>'','data'=>$user],200);
    }*/

   /* public function listUser(User $user)
    {
        $user = Auth::id();
        $users = $user->users;
        return response()->json(['message'=>null,'data'=>$users],200);
    }

    public function listComentario(User $user)
    {
        $user = Auth::id();
        $comentarios = $user->comentarios;
        return response()->json(['message'=>null,'data'=>$comentarios],200);
    }

    public function listJuegos_favs(User $user)
    {
        $user = Auth::id();
        $juegos = $user->juegos;
        return response()->json(['message'=>null,'data'=>$juegos],200);
    }

    public function update_user(Request $request, $user_id)
    {
        try {
            $user_id = Auth::id();
            $user = User::findOrFail($user_id);
            $user->update($request->all());
            return response()->json(['message' => 'Usuario actualizado satisfactioriamente', 'user' =>
                $user]);

        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 404);
        }

    }

    public function delete_user(Request $request, $id)
    {
        try{
            $id = Auth::id();
            $user = User::findOrFail($id);
            $user->delete();
            $user=Auth::user();
            $user_id = [$user->id];
            return $user;

        } catch (\Exception $exception) {
            return response()->json(['message' => 'No estás autorizado para realizar esta acción']);
        }

    }

    public function update_comentario_user(Request $request, $user_id, $comentario_id)
    {
        try {
            $user_id = Auth::id();
            $user = User::findOrFail($user_id);
            $comentario_id = Comentario::findOrFail($comentario_id);
            $comentario_id->update($request->all());
            return response()->json(['message' => 'Comentario actualizado satisfactioriamente', 'comentario' =>
                $comentario_id]);

        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 404);
        }

    }

    public function delete_comentario_user(Request $request, $id, $comentario_id)
    {
        try{
            $id = Auth::id();
            $user = User::findOrFail($id);
            $comentario_id = Comentario::findOrFail($comentario_id);
            $comentario_id->delete();
            return $comentario_id;

        } catch (\Exception $exception) {
            return response()->json(['message' => 'No estás autorizado para realizar esta acción']);
        }

    }*/





    /*public function listJuego_favs2(User $user)
    {
        $juego_user_fav = $user->juego_user->juego_id;
        $juegos_fav = $juego_user_fav->juegos;
        return response()->json(['message'=>null,'data'=>$juegos_fav],200);
    }*/



}
