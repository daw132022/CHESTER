@extends('admin.index')

@section('titulo', 'Juegos_fav')

@section('contenido')

    <!-- CONTENIDO REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario-2 ">
        <form name="add-new" class="contact-form-2" method="post" action="{{url('admin/gamefav/add')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-10" id="col-register" id="titulo-register">
                <h1 class="title-form col-lg-12 me-0 mb-5">Crear juego favorito</h1>

                <div class="form-group">
                    <label class="label-form" for="user_id" id="user_id">ID USUARIO</label>
                    <input id="user_id" name="user_id" class="input-text js-input mb-3" type="number" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="juego_id" id="juego_id">ID JUEGO</label>
                    <input id="juego_id" name="juego_id" class="input-text js-input mb-3" type="number" required>
                </div>


                <div class="col text-center" id="boton-add">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Crear juego favorito
                    </button>
                </div>

            </div>

        </form>

    </section>

@endsection
