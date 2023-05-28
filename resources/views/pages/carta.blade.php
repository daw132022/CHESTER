@extends('layouts.public')
@section('content')
    <!-- HERO CARTA-->
    <section class="fondo-carta">
        <div class="container-fluid p-0 pb-5" id="f-carta">

            <img src="{{asset('images/FONDO_CARTA_2.jpg')}}" width="100%" class="img-carta" alt="img-fluid" />

            <div class="titulo_carta">
                <h1 class="texto-carta">CARTA</h1>
            </div>

        </div>
    </section>

    <!-- CONTENIDO CARTA -->

    <!--CARTA -->
    <section class="carta d-flex flex-row pb-5 px-5">
        <div class="d-flex flex-row">
            <img src="{{asset('images/Carta 2020_1.png')}}" width="50%" class="img-fluid" alt="img-fluid" />
            <img src="{{asset('images/Carta 2020_2.png')}}" width="50%"  class="img-fluid" alt="img-fluid" />
        </div>

    </section>
@endsection
