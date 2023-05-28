@extends('admin.index')

@section('titulo', 'Juegos_fav')

@section('contenido')

    <div class="container" id="ver-usuario">
        <h1>Ver juego favorito</h1>

        <div class="lista-usuario">
            <div class="mt-5">
                <strong>ID:</strong>
                <p><?= $juego_fav->id?></p>
            </div>

            <div>
                <strong>ID USUARIO:</strong>
                <p><?= $juego_fav->user_id?></p>
            </div>

            <div>
                <strong>ID JUEGO:</strong>
                <p><?= $juego_fav->noticia_id?></p>
            </div>

            <a href="/admin/user/comments/{{ $juego_fav->user_id }}" class="btn btn-primary mt-4">Back</a>

        </div>

    </div>

@endsection







