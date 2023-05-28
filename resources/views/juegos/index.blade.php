@extends('layouts.public')

@section('content')

    <!-- HERO JUEGOS-->

    <section class="fondo-juegos">
        <div class="container-fluid p-0 pb-5" id="f-juegos">

            <img src="{{ asset('images/FONDO_JUEGOS_4.jpg')}}" width="100%" class="imagen-juegos" alt="img-fluid" />

            <div class="titulo_juegos">
                <h1 class="texto-juegos">JUEGOS</h1>
            </div>

        </div>
    </section>


    <!-- CONTENIDO JUEGOS -->

    <!--BUSCADOR JUEGOS -->
    <section class="buscador d-flex align-content-end justify-content-end py-5">
        <form action="{{url('juegos/search')}}" method="GET" class="input-group rounded w-25">
            <input type="text" name="titulo_juego" class="form-control rounded" placeholder="Titulo_juego" aria-label="Titulo_juego" />
            <button type="submit" class="input-group-text border-0 bg-transparent">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </section>

    <hr class="linea3" />

    <!--JUEGOS -->
    <section class="juegos pt-5">
        <div class="f-juegos-2">

            <div class="container">
                <div class="row gx-5 gy-5 mb-5" id="lista-juegos">
                    @foreach($juegos as $juego)
                        <div class="my-5 col-6 col-sm-3">
                            <a href="{{ url('juego/show/'.$juego->id) }}" class="text-decoration-none link-dark">
                                @foreach($juego->images as $img)
                                    <img src="{{ asset('juego_images/'.$img->image) }}" class="img-fluid" id="img-juegos" alt="img-fluid" />
                                    @break
                                @endforeach
                                <div class="t-juegos pt-2">
                                    <h5 class="fw-normal" id="titulo-juego-index">{{ $juego->titulo_juego }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- PAGINACIÓN -->

        <div class="pagination-container">
            <ul class="pagination">
                @if ($juegos->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $juegos->previousPageUrl() }}" rel="prev"><i class="fas fa-chevron-left"></i></a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">{{ $juegos->currentPage() }}</span>
                </li>

                @if ($juegos->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $juegos->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a>
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
