@extends('admin.index')

@section('titulo', 'Juegos')

@section('contenido')



    <div class="container">

        <section class="formulario-3 ">
            <form name="edit" class="contact-form-2" method="post" action="{{url('admin/game/edit/'.$juego->id)}}" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-start m-0" id="row-login">
                    <div class="col-2 col-lg-4"></div>

                    <div class="col-6" id="col-register" id="titulo-register">
                        <h1 class="title-form col-lg-12 mb-5">Editar juego</h1>

                        <div class="form-group">
                            <label class="label-form" for="titulo" id="titulo">TÍTULO JUEGO</label>
                            <input id="titulo" name="titulo_juego" class="input-text js-input mb-3" type="text" value=<?php echo $juego->titulo_juego ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="categoria" id="categoria">MÍN DE JUGADORES</label>
                            <input id="categoria" name="min_jugadores" class="input-text js-input mb-3" type="number" value=<?php echo $juego->max_jugadores ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="fecha" id="fecha">MÁX DE JUGADORES</label>
                            <input id="fecha" name="max_jugadores" class="input-text js-input mb-3" type="number" value=<?php echo $juego->min_jugadores ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="texto" id="texto">TIEMPO DE JUEGO</label>
                            <input id="texto" name="tiempo_juego" class="input-text js-input mb-3" type="number" value=<?php echo $juego->tiempo_juego ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="texto" id="texto">DESCRIPCCIÓN</label>
                            <input id="texto" name="descripccion" class="input-text js-input mb-3" type="text" value=<?php echo $juego->descripccion ?>>
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="reglas_juego">REGLAS DEL JUEGO</label>
                            <input id="pdf_reglas_juego" name="pdf_reglas_juego" class="input-file mb-3" type="file">
                        </div>

                        <div class="form-field col-lg-6">
                            <label class="label-form" for="imagen" id="imagen">IMAGEN</label>
                            <input id="imagen" name="imagenes_juego[]" class="input-text js-input mb-3" type="file" multiple>
                            @if ($juego->image_juego)
                                <img src="{{ asset('public/juego_images/'.$juego->image_juego) }}" alt="Imagen Juego">
                            @endif
                        </div>

                        <div class="form-field">
                            <a href="/admin/games" class="btn btn-primary">Back</a>
                            <button href="/admin/games" type="submit" class="btn btn-primary">Editar juego</button>
                        </div>

                    </div>

                    <div class="col-1"></div>
                </div>

            </form>

        </section>
    </div>

@endsection
