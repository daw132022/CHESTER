@extends('admin.index')

@section('titulo', 'Juegos_fav')

@section('contenido')

    <!-- CONTENIDO REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario-2 ">
        <form name="add-new" class="contact-form-2" method="post" action="{{url('admin/game/add')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-10" id="col-register" id="titulo-register">
                <h1 class="title-form col-lg-12 me-0 mb-5">Crear juego</h1>

                <div class="form-group">
                    <label class="label-form" for="titulo" id="titulo">TÍTULO JUEGO</label>
                    <input id="titulo" name="titulo_juego" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="categoria" id="categoria">MÍN DE JUGADORES</label>
                    <input id="categoria" name="min_jugadores" class="input-text js-input mb-3" type="number" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="fecha" id="fecha">MÁX DE JUGADORES</label>
                    <input id="fecha" name="max_jugadores" class="input-text js-input mb-3" type="number" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="texto" id="texto">TIEMPO DE JUEGO</label>
                    <input id="texto" name="tiempo_juego" class="input-text js-input mb-3" type="number" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="texto" id="texto">DESCRIPCCIÓN</label>
                    <input id="texto" name="descripccion" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="pdfs">REGLAS DEL JUEGO</label>
                    <input id="pdfs" name="pdfs[]" type="file" class="form-control mb-3" multiple>
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
                        Crear juego
                    </button>
                </div>

            </div>

        </form>

    </section>

@endsection
