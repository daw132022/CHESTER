@extends('layouts.public')

@section('content')

    <!-- HERO DETALLE NOTICIAS -->

    <section class="fondo-detalle-noticias">
        <div id="carousel-container" class="carousel slide" data-bs-ride="carousel">
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
    </section>

    <section class="detalle-noticias pt-5">
        <section class="contenido-noticias pe-5 ps-5">
            <div class="row justify-content-center">
                <div class="col-2 mb-5" id="col-7"></div>
                <div class="col-10" id="col-4">
                    <div class="descripcion-noticia justify-content-center col-9 ms-4 px-3 px-sm-3 px-md-4 px-lg-5 px-xl-5">
                        <div class="fecha">
                            <h6 class="fst-italic" id="fecha-texto">{{ $noticia->fecha }}</h6>
                        </div>
                        <div class="categoria">
                            <h4 class="fw-normal" id="categoria-texto">{{ $noticia->categoria }}</h4>
                        </div>
                        <div class="titulo">
                            <h1 class="fw-bold" id="titulo-texto">{{ $noticia->titulo_noticia }}</h1>
                        </div>
                        <div class="descripcion">
                            <p class="descripcion-texto">{{ $noticia->texto_noticia }}</p>
                        </div>
                    </div>



                    <hr class="linea4" />

                    <!--COMENTARIOS DETALLE_NOTICIAS -->

                    <div class="container">
                        <div class="row comentarios justify-content-start ms-4">
                            <div class="col-9">
                                <!-- Formulario para agregar comentarios -->
                                <form action="{{ url('noticia/add-comment') }}" method="POST" class="form_comentarios d-flex justify-content-end flex-wrap">
                                    @csrf
                                    <textarea name="texto" placeholder="Comentario"></textarea>
                                    @if($noticia)
                                        <input type="hidden" name="noticia_id" value="{{ $noticia->id }}">
                                    @endif
                                    <input type="hidden" name="user_id" value="{{ optional(auth()->user())->id }}">
                                    <button class="btn" type="submit">COMENTAR</button>
                                </form>

                                <div class="media">
                                    @foreach($comentarios as $comentario)
                                        <div class="media-body">
                                            <p class="nombre">{{ $comentario->user->nombre }}<span>{{ date('g:i A, F j, Y', strtotime($comentario->created_at)) }}</span></p>
                                            <p class="comentario">{{ $comentario->texto }}</p>
                                            <div class="botones text-end d-flex justify-content-end">
                                                @if(auth()->check() && ($comentario->user_id == auth()->user()->id))
                                                    <button onclick="muestraComentario({{$comentario->id}})" id="btn-editar-{{ $comentario->id }}" href="" class="editar-comentario btn btn-link text-secondary" data-comentario-id="{{ $comentario->id }}">Editar</button>

                                                    <form  id="editar-form-{{ $comentario->id }}" action="{{ route('comentarios.update', $comentario->id) }}" method="POST" class="form_comentarios d-flex justify-content-end flex-wrap d-none">
                                                        @csrf
                                                        @method('PUT')
                                                        <textarea id="editar-comentario" name="texto" placeholder="Comentario">{{ $comentario->texto }}</textarea>
                                                        <button class="btn" type="submit">Guardar cambios</button>
                                                    </form>

                                                        <form id="borrar-form-{{ $comentario->id }}" action="{{ url('/comentarios/'.$comentario->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href="" class="btn btn-link text-secondary" onclick="event.preventDefault(); document.getElementById('borrar-form-{{ $comentario->id }}').submit();">Borrar</button>
                                                        </form>
                                                    @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <script src="{{ asset('js/utils.js') }}"></script>

@endsection




