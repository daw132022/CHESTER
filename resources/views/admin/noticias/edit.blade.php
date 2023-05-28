@extends('admin.index')

@section('titulo', 'Noticias')

@section('contenido')



    <div class="container">

        <section class="formulario-3 ">
            <form name="edit" class="contact-form-2" method="post" action="{{url('admin/new/edit/'.$noticia->id)}}" enctype="multipart/form-data">
                @csrf

                <div class="row align-items-start m-0" id="row-login">
                    <div class="col-2 col-lg-4"></div>

                    <div class="col-6" id="col-register" id="titulo-register">
                        <h1 class="title-form col-lg-12 mb-5">Editar noticia</h1>

                        <div class="form-field col-lg-6 mt-5" id="input-nombre">
                            <label class="label-form" for="titulo" id="titulo">TÍTULO NOTICIA</label>
                            <input id="titulo" name="titulo_noticia" class="input-text js-input mb-3" type="text" value=<?php echo $noticia->titulo_noticia ?> >
                        </div>

                        <div class="form-field col-lg-6 ">
                            <label class="label-form" for="fecha" id="fecha">FECHA</label>
                            <input id="fecha"  name="fecha" class="input-text js-input mb-3" type="date" value=<?php echo $noticia->fecha ?>>
                        </div>

                        <div class="form-field col-lg-6 ">
                            <label class="label-form" for="categoria" id="categoria">CATEGORÍA</label>
                            <input id="categoria" name="categoria" class="input-text js-input mb-3" type="text" value=<?php echo $noticia->categoria ?>>
                        </div>

                        <div class="form-field col-lg-6 ">
                            <label class="label-form" for="texto" id="texto">TEXTO NOTICIA</label>
                            <input id="texto" name="texto_noticia" class="input-text js-input mb-3" type="text" value=<?php echo $noticia->texto_noticia ?>>
                        </div>

                        <div class="form-field col-lg-6">
                            <label class="label-form" for="imagen" id="imagen">IMAGEN</label>
                            <input id="imagen" name="imagenes_noticia[]" class="input-text js-input mb-3" type="file" multiple>
                        @if ($noticia->image_noticia)
                                <img src="{{ asset('public/noticia_images/'.$noticia->image_noticia) }}" alt="Imagen Noticia">
                            @endif
                        </div>


                        <div class="form-field">
                            <a href="/admin/news" class="btn btn-primary">Back</a>
                            <button href="/admin/news" type="submit" class="btn btn-primary">Editar noticia</button>
                        </div>

                    </div>

                    <div class="col-1"></div>
                </div>

            </form>

        </section>
    </div>

@endsection
