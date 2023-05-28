@extends('admin.index')

@section('titulo', 'Comentarios')

@section('contenido')

    <div class="container" id="ver-usuario">
        <h1>Ver comentario</h1>

        <div class="lista-usuario">
            <div class="mt-5">
                <strong>ID:</strong>
                <p><?= $comentario->id?></p>
            </div>

            <div>
                <strong>TEXTO:</strong>
                <p><?= $comentario->texto?></p>
            </div>

            <div>
                <strong>ID USUARIO:</strong>
                <p><?= $comentario->user_id?></p>
            </div>

            <div>
                <strong>ID NOTICIA:</strong>
                <p><?= $comentario->noticia_id?></p>
            </div>

            <a href="/admin/user/comments/{{ $comentario->user_id }}" class="btn btn-primary mt-4">Back</a>

        </div>

    </div>

@endsection







