@extends('layouts.public')

@section('content')


    <!-- CONTENIDO PERFIL_USUARIO -->

<!--HERO PERFIL_USUARIO-->

<section class="perfil-usuario">
    <div>
        <h1>AURORA TEJADA CORDÓN</h1>
    </div>
</section>

<!-- CONTENIDO PERFIL_USUARIO  -->

<!--DATOS PERFIL_USUARIO-->
<section class="detalle-juegos pt-5">
    <section class="contenido-noticias pe-5 ps-5">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="max-jugadores row">
                        <h6 class="fw-bold col-4 me-5" id="max-jugadores-texto">NOMBRE:</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->nombre?></p>
                    </div>
                    <div class="min-jugadores row">
                        <h6 class="fw-bold col-4 me-5" id="min-jugadores-texto">APELLIDOS:</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->apellidos?></p>
                    </div>
                    <div class="tiempo-juego row">
                        <h6 class="fw-bold col-4 me-5" id="tiempo-juego-texto">NOMBRE USUARIO:</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->nombre_usuario?></p>
                    </div>
                    <div class="tiempo-juego row">
                        <h6 class="fw-bold col-4 me-5" id="tiempo-juego-texto">TELÉFONO:</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->telefono?></p>
                    </div>
                    <div class="tiempo-juego row">
                        <h6 class="fw-bold col-4 me-5" id="tiempo-juego-texto">DIRECCIÓN</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->direccion?></p>
                    </div>
                    <div class="tiempo-juego row">
                        <h6 class="fw-bold col-4 me-5" id="tiempo-juego-texto">EMAIL:</h6>
                        <p class="texto-detalle-juegos col-5"><?=$user->email?></p>
                    </div>

                    <div class="form-field mb-5">
                        <a href="{{url('perfil/edit/'.$user->id)}}" id="boton-5" class="submit-btn-5">EDITAR</a>
                    </div>
                </div>

                <div class="col"></div>
                <div class="col">
                    <div class="titulo-perfil-usuario">
                        <h1 class="t-perfil-usuario">
                            JUEGOS FAVORITOS
                        </h1>
                    </div>
                    <?php

                    foreach($juegos_fav as $juego_fav){ ?>
                    <ul>
                        <li>{{ $juego_fav->juego->titulo_juego }}</li>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</section>

<!--IMAGEN PERFIL_USUARIO-->

<section class="img-perfil-usuario">
    <div class="">
        <img src="{{ asset('images/FONDO_PERFIL_USUARIO_2.jpg')}}" class="img-fluid" alt="img-fluid" id="fondo-perfil-usuario" width="600"
             height="300" />
    </div>
</section>


@endsection
