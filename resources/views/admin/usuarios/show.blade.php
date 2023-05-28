@extends('admin.index')

@section('titulo', 'Usuarios')

@section('contenido')

    <div class="container" id="ver-usuario">
        <h1>Ver usuario</h1>

        <div class="lista-usuario">
            <div class="mt-5">
                <strong>ID:</strong>
                <p><?= $user->id?></p>
            </div>

            <div>
                <strong>NOMBRE:</strong>
                <p><?= $user->nombre?></p>
            </div>

            <div>
                <strong>APELLIDOS:</strong>
                <p><?= $user->apellidos?></p>
            </div>

            <div>
                <strong>NOMBRE USUARIO:</strong>
                <p><?= $user->nombre_usuario?></p>
            </div>

            <div>
                <strong>TELÉFONO:</strong>
                <p><?= $user->telefono?></p>
            </div>

            <div>
                <strong>DIRECCIÓN:</strong>
                <p><?= $user->direccion?></p>
            </div>

            <div>
                <strong>EMAIL:</strong>
                <p><?= $user->email?></p>
            </div>

            <div>
                <strong>ROLL:</strong>
                <p><?= $user->roll_id?></p>
            </div>

            <a href="/admin/usuarios" class="btn btn-primary mt-4">Back</a>
            <a href="{{('/admin/user/comments/' .$user->id)}}"  class="btn btn-primary mt-4">Ver comentarios</a>
            <a href="{{('/admin/user/gamesfav/' .$user->id)}}"  class="btn btn-primary mt-4">Ver juegos favoritos</a>

        </div>

    </div>

@endsection







