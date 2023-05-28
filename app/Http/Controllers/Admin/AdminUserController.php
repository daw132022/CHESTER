<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{

    public function index(User $users){
        $users = User::paginate(10);
        return view('admin.usuarios.index',compact('users'));
    }

    public function create()
    {
        return view('admin.usuarios.add');
    }

    public function add(Request $request, User $users)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'nombre_usuario' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'roll_id' => 'required|integer',
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
            'roll_id' => $request->get('roll_id'),
        ]);
        return redirect('admin/usuarios');
    }

    public function show( $id)
    {
        $user = User::findOrFail($id);
        return view('admin.usuarios.show', compact('user'));
    }

    public function edit( $id)
    {
        $user = User::findOrFail($id);
        return view('admin.usuarios.edit', compact('user'));
    }

    public function editar(Request $request, $id, User $users )
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'nombre_usuario' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'roll_id' => 'required|integer',
        ]);

        User::where('id', $id)
            ->update(['nombre' => $request->get('nombre'),
                    'apellidos' => $request->get('apellidos'),
                    'nombre_usuario' => $request->get('nombre_usuario'),
                    'telefono' => $request->get('telefono'),
                    'direccion' => $request->get('direccion'),
                    'email' => $request->get('email'),
                    'roll_id' => $request->get('roll_id'),]
            );
        return redirect('admin/usuarios');

    }


    public function delete(Request $request, $id, User $users)
    {
            $user = User::findOrFail($id);
            $user->delete($request->all());

            return redirect('admin/usuarios');

    }




}
