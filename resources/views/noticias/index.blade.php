@extends('layouts.public')
@section('content')

    <!-- HERO NOTICIAS-->

    <section class="fondo-noticias">
        <div class="container-fluid p-0 pb-5" id="f-noticias">

            <img src="{{ asset('images/FONDO_NOTICIAS_3.jpg') }}" class="img-noticias" width="100%" alt="img-fluid" />

            <div class="titulo_noticias">
                <h1 class="texto-noticias">NOTICIAS</h1>
            </div>

        </div>
    </section>

    <!-- CONTENIDO NOTICIAS -->

    <!--BUSCADOR NOTICIAS -->
    <section class="buscador d-flex align-content-end justify-content-end py-5">
        <form action="{{ url('noticias/search') }}" method="GET" class="input-group rounded w-25">
            <input type="text" name="query" class="form-control rounded" placeholder="Buscar por título o categoría" aria-label="Buscar por título o categoría" />
            <button type="submit" class="input-group-text border-0 bg-transparent">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </section>


    <hr class="linea3" />

    <!--NOTICIAS -->
    <section class="noticias pt-5">
        <?php

        foreach($noticias as $noticia){ ?>
            <section class="contenido-noticias">
                <div class="row pt-0 pb-4 pt-lg-5 pb-lg-5 m-0" id="row-2">
                <div id="carousel-container col-4" class="carousel slide col-7" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($noticia->images as $img)
                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                <img src="{{asset('noticia_images/'.$img->image)}}" class="carousel-image d-block w-100" alt="...">
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
                <div class="col-4" id="col-5"></div>
                </div>

                <div class="descripcion-noticia px-3 px-sm-3 px-md-4 px-lg-5 px-xl-5">
                    <div class="fecha">
                        <h6 class="fst-italic" id="fecha-texto"><?=$noticia->fecha?></h6>
                    </div>
                    <div class="categoria">
                        <h4 class="fw-normal" id="categoria-texto"><?=$noticia->categoria?></h4>
                    </div>
                    <div class="titulo">
                        <h1 class="fw-bold" id="titulo-texto"><?=$noticia->titulo_noticia?></h1>
                    </div>
                    <div class="descripcion">
                        <p class="descripcion-texto"><?=$noticia->texto_noticia?></p>
                    </div>
                </div>

                <div class="form-field">
                    <a href="{{ url('noticia/show/'.$noticia->id) }}" id="boton-4" class="submit-btn mb-5 ms-5">VER MÁS</a>
                </div>
            </section>
        <?php }?>

            <!-- PAGINACIÓN -->

        <div class="pagination-container">
            <ul class="pagination">
                @if ($noticias->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $noticias->previousPageUrl() }}" rel="prev"><i class="fas fa-chevron-left"></i></a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">{{ $noticias->currentPage() }}</span>
                </li>

                @if ($noticias->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $noticias->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-right"></i></span>
                    </li>
                @endif
            </ul>
        </div>

    </section>

@endsection
