@extends('layouts.public')
@section('content')

<!-- CONTENIDO CONTACTO -->

<!--CONTACTO -->
<section class="contacto">
    <div class="contenido-contacto">
        <div class="contacto-1">
            <div>
                <div class="reserva">
                    <h1>RESERVAS/PEDIDOS</h1>
                </div>
                <div class="texto-reserva">
                    <p>Para realizar una reserva o un pedido, contáctanos con el siguiente número:</p>
                </div>
                <div class="tel-reserva">
                    <h3>647 917 935</h3>
                </div>
            </div>
            <div class="contacto-2">
                <div class="ubicacion">
                    <h1>UBICACIÓN</h1>
                </div>
                <div class="texto-ubicacion">
                    <p>Actualmente nos situamos en:</p>
                </div>
                <div class="tex-ubicacion">
                    <h3>Pl. Fermín Gurbindo 3</h3>
                </div>
            </div>
            <div class="contacto-3">
                <div class="horarios">
                    <h1>HORARIOS</h1>
                </div>
                <div class="tex-horarios">
                    <div class="det-horarios">
                        <h3>Lunes: Cerrado</h3>
                        <h3>Martes: Cerrado</h3>
                        <h3>Miércoles: 18:00–24:00</h3>
                        <h3>Jueves: 18:00–24:00</h3>
                        <h3>Viernes: 18:00–24:00</h3>
                        <h3>Sábado: 14:00–24:00</h3>
                        <h3>Domingo: 18:00–24:00</h3>
                    </div>
                </div>
            </div>
        </div>

</section>

<!-- HERO CONTACTO-->

<section class="fondo-contacto">
    <div class="container-fluid p-0" id="f-contacto">

        <img src="{{asset('images/FONDO_CONTACTO_3.jpg')}}" width="100%" class="img-fluid" alt="img-fluid" />

        <div class="titulo_contacto">
            <h1 class="texto-contacto">CONTACTO</h1>
        </div>

    </div>
</section>

@endsection
