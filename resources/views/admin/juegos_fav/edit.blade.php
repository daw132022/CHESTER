@extends('admin.index')

@section('titulo', 'Juegos_fav')

@section('contenido')



    <div class="container">

        <section class="formulario-3 ">
            <form name="edit" class="contact-form-2" method="post" action="{{url('admin/gamefav/edit/'.$juego_fav->id)}}" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-start m-0" id="row-login">
                    <div class="col-2 col-lg-4"></div>

                    <div class="col-6" id="col-register" id="titulo-register">
                        <h1 class="title-form col-lg-12 mb-5">Editar juego favorito</h1>

                        <div class="form-group">
                            <label class="label-form" for="user_id" id="user_id">ID USUARIO</label>
                            <input id="user_id" name="user_id" class="input-text js-input mb-3" type="number" value=<?php echo $juego_fav->user_id ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="juego_id" id="juego_id">ID JUEGO</label>
                            <input id="juego_id" name="juego_id" class="input-text js-input mb-3" type="number" value=<?php echo $juego_fav->juego_id ?>>
                        </div>

                        <div class="form-field">
                            <a href="/admin/user/gamesfav/{{ $juego_fav->user_id }}" class="btn btn-primary">Back</a>
                            <button href="/admin/user/gamesfav/{{ $juego_fav->user_id }}" type="submit" class="btn btn-primary">Editar juego favorito</button>
                        </div>

                    </div>

                    <div class="col-1"></div>
                </div>

            </form>

        </section>
    </div>

@endsection
