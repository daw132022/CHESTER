@extends('admin.index')

@section('titulo', 'Noticias')

@section('contenido')

    <!-- CONTENIDO REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario-2 ">
        <form name="add-new" class="contact-form-2" method="post" action="{{url('admin/new/add')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-10" id="col-register" id="titulo-register">
                <h1 class="title-form col-lg-12 me-0 mb-5">Crear noticia</h1>

                <div class="form-group">
                    <label class="label-form" for="titulo" id="titulo">TÍTULO NOTICIA</label>
                    <input id="titulo" name="titulo_noticia" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="fecha" id="fecha">FECHA</label>
                    <input id="fecha" name="fecha" class="input-text js-input mb-3" type="date" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="categoria" id="categoria">CATEGORÍA</label>
                    <input id="categoria" name="categoria" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="texto" id="texto">TEXTO NOTICIA</label>
                    <input id="texto" name="texto_noticia" class="input-text js-input mb-3" type="text" required>
                </div>

           <div class="form-group mb-5">
                    <label class="label-form" for="imagen">IMAGEN</label>
                    <input (change)="onSelectImage($event)"
                           id="imagen"
                           name="images[]"
                           type="file"
                           class="form-control"
                           formControlName="imagen"
                           multiple
                    >
                </div>

                <div class="col text-center" id="boton-add">
                    <a href="/admin/usuarios" class="btn btn-primary me-2">Back</a>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Crear noticia
                    </button>
                </div>

            </div>

        </form>

    </section>

@endsection
