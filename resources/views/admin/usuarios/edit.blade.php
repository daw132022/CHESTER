@extends('admin.index')

@section('titulo', 'Usuarios')

@section('contenido')



<div class="container">

    <section class="formulario-3 ">
        <form name="edit" class="contact-form-2" method="post" action="{{url('admin/user/edit/'.$user->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="row align-items-start m-0" id="row-login">
                <div class="col-2 col-lg-4"></div>

                <div class="col-6" id="col-register" id="titulo-register">
                    <h1 class="title-form col-lg-12 mb-5">Editar usuario</h1>

                    <div class="form-field col-lg-6 mt-5" id="input-nombre">
                        <label class="label-form" for="nombre" id="id">NOMBRE</label>
                        <input id="nombre" name="nombre" class="input-text js-input mb-3" type="text" value=<?php echo $user->nombre ?> >
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="apellidos" id="apellidos">APELLIDOS</label>
                        <input id="apellidos"  name="apellidos" class="input-text js-input mb-3" type="text" value=<?php echo $user->apellidos ?>>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="nombre_usuario" id="nombre_usuario">NOMBRE_USUARIO</label>
                        <input id="nombre_usuario" name="nombre_usuario" class="input-text js-input mb-3" type="text" value=<?php echo $user->nombre_usuario ?>>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="telefono" id="telefono">TELÉFONO</label>
                        <input id="telefono" name="telefono" class="input-text js-input mb-3" type="tel" value=<?php echo $user->telefono ?>>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="direccion" id="direccion">DIRECCIÓN</label>
                        <input id="direccion" name="direccion" class="input-text js-input mb-3" type="text" value=<?php echo $user->direccion ?>>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="email" id="email">EMAIL</label>
                        <input id="email" name="email" class="input-text js-input mb-3" type="email" value=<?php echo $user->email ?>>
                    </div>

                    <div class="form-field col-lg-6 ">
                        <label class="label-form" for="roll" id="roll">ROLL</label>
                        <input id="roll" name="roll_id" class="input-text js-input mb-5" type="number" value=<?php echo $user->roll_id ?>>
                    </div>


                    <div class="form-field">
                        <a href="/admin/usuarios" class="btn btn-primary">Back</a>
                        <button href="/admin/usuarios" type="submit" class="btn btn-primary">Editar usuario</button>
                    </div>

                </div>

                <div class="col-1"></div>
            </div>

        </form>

    </section>
</div>

@endsection
