@extends('layouts.public')

@section('content')

<!-- HERO DETALLE_JUEGOS-->

<section class="fondo-detalle-juegos">
    <div class="container-fluid p-0 pb-5" id="f-detalle-juegos">
        @foreach($juego->images as $img)
            <img src="{{ asset('juego_images/'.$img->image) }}" class="imagen-juegos w-100 h-auto" id="img-juegos" alt="img-fluid" />
            @break
        @endforeach
    </div>
</section>

<!-- CONTENIDO DETALLE_JUEGOS -->


<!--DETALLE_JUEGOS -->
<section class="detalle-juegos pt-5">
    <section class="contenido-noticias pe-5 ps-5">
        <div class="row justify-content-center">
            <div class="col-2 mb-5" id="col-7"></div>
            <div class="col-10" id="col-4">
                <div class="descripcion-noticia justify-content-center col-9 ms-4 px-3 px-sm-3 px-md-4 px-lg-5 px-xl-5">

                    <div class="titulo">
                        <h1 class="fw-bold" id="titulo-detalle-juegos"><?=$juego->titulo_juego?></h1>
                    </div>
                    <div class="max-jugadores row">
                        <h6 class="fw-bold col-4" id="max-jugadores-texto">Máx-jugadores:</h6>
                        <p class="texto-detalle-juegos col-1"><?=$juego->max_jugadores?></p>
                    </div>
                    <div class="min-jugadores row">
                        <h6 class="fw-bold col-4" id="min-jugadores-texto">Mín-jugadores:</h6>
                        <p class="texto-detalle-juegos col-1"><?=$juego->min_jugadores?></p>
                    </div>
                    <div class="tiempo-juego row">
                        <h6 class="fw-bold col-4" id="tiempo-juego-texto">Tiempo de juego:</h6>
                        <p class="texto-detalle-juegos col-2"><?=$juego->tiempo_juego.'"'?></p>
                    </div>
                    <div class="descripccion-juego mt-4">
                        <h6 class="fw-bold" id="descripccion-juego">Descripcción:</h6>
                        <p class="texto-detalle_juegos"><?=$juego->descripccion?></p>
                    </div>

                    <div class="container p-0">
                        <h6 class="fw-bold col-4" id="reglas-juego">Reglas juego:</h6>
                            <div class="col-12">
                                @if($pdf)
                                    <a href="{{ asset('juego_pdfs/'.$pdf->pdf) }}" download>
                                        Descargar Reglas del Juego
                                    </a>
                                @else
                                    <p>No hay reglas del juego disponibles.</p>
                                @endif
                        </div>
                    </div>


                    <div class="favorito-btn mt-4">
                        @if ($juego)
                            <form action="{{ url('juego/favorito/' . $juego->id) }}" method="GET">
                                @csrf
                                @if ($juego->esFavorito())
                                    <button type="submit" name="favorito" value="false" class="btn btn-danger">Eliminar de favoritos</button>
                                @else
                                    <button type="submit" name="favorito" value="true" class="btn btn-primary">Marcar como favorito</button>
                                @endif
                            </form>
                        @endif
                    </div>


                    <div class="col-12 mt-5">
                        <div id="carousel-container col-4" class="carousel slide col-10 mb-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($juego->images as $img)
                                    <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                        <img src="{{asset('juego_images/'.$img->image)}}" class="carousel-image d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


@endsection
