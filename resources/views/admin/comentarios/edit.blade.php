@extends('admin.index')

@section('titulo', 'Comentarios')

@section('contenido')



    <div class="container">

        <section class="formulario-3 ">
            <form name="edit" class="contact-form-2" method="post" action="{{url('admin/comment/edit/'.$comentario->id)}}" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-start m-0" id="row-login">
                    <div class="col-2 col-lg-4"></div>

                    <div class="col-6" id="col-register" id="titulo-register">
                        <h1 class="title-form col-lg-12 mb-5">Editar comentario</h1>

                        <div class="form-group">
                            <label class="label-form" for="texto" id="texto">COMENTARIO</label>
                            <input id="texto" name="texto" class="input-text js-input mb-3" type="text" value=<?php echo $comentario->texto ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="user_id" id="user_id">ID USUARIO</label>
                            <input id="user_id" name="user_id" class="input-text js-input mb-3" type="number" value=<?php echo $comentario->user_id ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="noticia_id" id="noticia_id">ID NOTICIA</label>
                            <input id="noticia_id" name="noticia_id" class="input-text js-input mb-3" type="number" value=<?php echo $comentario->noticia_id ?>>
                        </div>

                        <div class="form-field">
                            <a href="/admin/user/comments/{{ $comentario->user_id }}" class="btn btn-primary">Back</a>
                            <button href="/admin/user/comments/{{ $comentario->user_id }}" type="submit" class="btn btn-primary">Editar comentario</button>
                        </div>

                    </div>

                    <div class="col-1"></div>
                </div>

            </form>

        </section>
    </div>

@endsection
