@extends('admin.index')

@section('titulo', 'Usuarios')

@section('contenido')

    <!-- CONTENIDO REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario-2 ">
        <form name="register" class="contact-form-2" method="post" action="{{url('admin/user/add')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-10" id="col-register" id="titulo-register">
                <h1 class="title-form col-lg-12 me-0 mb-5">Crear usuario</h1>

            <div class="form-group">
                <label class="label-form" for="nombre" id="nombre">NOMBRE</label>
                <input id="nombre" name="nombre" class="input-text js-input mb-3" type="text" required>
            </div>

                <div class="form-group">
                    <label class="label-form" for="apellidos" id="apellidos">APELLIDOS</label>
                    <input id="apellidos" name="apellidos" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="nombre_usuario" id="nombre_usuario">NOMBRE USUARIO</label>
                    <input id="nombre_usuario" name="nombre_usuario" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="telefono" id="telefono">TELÉFONO</label>
                    <input id="telefono" name="telefono" class="input-text js-input mb-3" type="number" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="direccion" id="direccion">DIRECCIÓN</label>
                    <input id="direccion" name="direccion" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="email" id="email">EMAIL</label>
                    <input id="email" name="email" class="input-text js-input mb-3" type="text" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="password" id="password">CONTRASEÑA</label>
                    <input id="password" name="password" class="input-text js-input mb-3" type="password" required>
                </div>

                <div class="form-group">
                    <label class="label-form" for="roll_id" id="roll_id">ROLL</label>
                    <input id="roll_id" name="roll_id" class="input-text js-input mb-5" type="number" required>
                </div>


                <div class="col text-center" id="boton-add">
                    <a href="/admin/usuarios" class="btn btn-primary me-2">Back</a>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Crear usuario
                </button>
            </div>

        </form>

    </section>

@endsection
