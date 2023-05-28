@extends('layouts.public')
@section('content')

    <!-- CONTENIDO LOGIN/REGISTER  -->

    <!--FORMULARIO-->

    <section class="formulario">
        <form name="login" class="contact-form" method="post" action="{{url('login')}}" enctype="multipart/form-data" >
            @csrf
            @method('post')
            <div class="row align-items-start m-0" id="row-login">

                <div class="col p-5">
                    <h1 class="title-form col-lg-12 mb-4">INICIA SESIÓN</h1>

                    <div class="form-field col-lg-6 ">
                        <input id="email" name="email" class="input-text js-input" type="email" required>
                        <label class="label" for="email" id="email">EMAIL</label>
                    </div>


                    <div class="form-field col-lg-6 ">
                        <input id="password" name="password" class="input-text js-input" type="password" required>
                        <label class="label" for="password" id="password" >CONTRASEÑA</label>
                    </div>

                    <div class="form-field">
                        <button class="submit-btn" id="boton-3" type="submit" >INICIAR SESIÓN</button>
                    </div>
                </div>


                <div class="col p-5">
                    <h1 class="title-form2  col-lg-12 mb-4">REGÍSTRATE</h1>
                    <p class="t-registrate">
                        SI TODAVÍA NO TIENES UNA CUENTA DE USUARIO, UTILIZA ESTA OPCIÓN PARA ACCEDER AL FORMULARIO DE REGISTRO.
                    </p>
                    <div class="form-field">
                        <a class="submit-btn" id="boton-3"  href="{{url('register')}}">REGÍSTRATE</a>
                    </div>
                </div>

            </div>

        </form>

    </section>


@endsection
