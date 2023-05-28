@extends('layouts.public')
@section('content')

    <!-- HERO REGISTER  -->

    <section class="login-register">
        <div>
            <img src="{{asset('images/LETRAS_CHESTER_2.jpg')}}" class="img-fluid" alt="img-fluid" id="letras-chester" width="600"
                 height="300" />
        </div>
    </section>

    <!-- CONTENIDO REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario-2 ">
        <form name="register" class="contact-form-2" method="post" action="{{url('register')}}" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-start m-0" id="row-login">
                <div class="col-2 col-lg-4"></div>

                <div class="col-6" id="col-register" id="titulo-register">
                    <h1 class="title-form col-lg-12 mb-5">DATOS PERSONALES</h1>

                    <div class="form-field col-lg-6 mt-5" id="input-nombre">
                        <input id="nombre" name="nombre" class="input-text js-input" type="text" required>
                        <label class="label" for="nombre" id="email">NOMBRE</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="apellidos"  name="apellidos" class="input-text js-input" type="text" required>
                        <label class="label" for="apellidos" id="apellidos">APELLIDOS</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="nombre_usuario" name="nombre_usuario" class="input-text js-input" type="text" required>
                        <label class="label" for="nombre_usuario" id="nombre_usuario">NOMBRE_USUARIO</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="telefono" name="telefono" class="input-text js-input" type="tel" required>
                        <label class="label" for="telefono" id="telefono">TELÉFONO</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="direccion" name="direccion" class="input-text js-input" type="text" required>
                        <label class="label" for="direccion" id="direccion">DIRECCIÓN</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="email" name="email" class="input-text js-input" type="email" required>
                        <label class="label" for="email" id="email">EMAIL</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="password" name="password" class="input-text js-input" type="password" required>
                        <label class="label" for="password" id="password">CONTRASEÑA</label>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <input id="password" name="password_confirmation" class="input-text js-input" type="password" required>
                        <label class="label" for="password" id="password">REPETIR CONTRASEÑA</label>
                    </div>


                    <div class="form-field">
                        <input class="submit-btn" type="submit" id="boton-3" value="CREAR CUENTA">
                    </div>

                </div>

                <div class="col-1"></div>
            </div>

        </form>

    </section>


@endsection
