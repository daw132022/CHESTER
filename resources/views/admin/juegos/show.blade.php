@extends('admin.index')

@section('titulo', 'Juegos')

@section('contenido')

    <div class="container" id="ver-usuario">
        <h1>Ver juego</h1>

        <div class="lista-usuario">
            <div class="mt-5">
                <strong>ID:</strong>
                <p><?= $juego->id?></p>
            </div>

            <div>
                <strong>TÍTULO JUEGO:</strong>
                <p><?= $juego->titulo_juego?></p>
            </div>

            <div>
                <strong>MÁX DE JUGADORES:</strong>
                <p><?= $juego->max_jugadores?></p>
            </div>

            <div>
                <strong>MIN DE JUGADORES:</strong>
                <p><?= $juego->min_jugadores?></p>
            </div>

            <div>
                <strong>TIEMPO DE JUEGO:</strong>
                <p><?= $juego->tiempo_juego?></p>
            </div>

            <div>
                <strong>DESCRIPCCIÓN:</strong>
                <p><?= $juego->descripccion?></p>
            </div>

            <div>
                <strong>REGLAS DEL JUEGO:</strong>
                @if ($pdfs)
                    <p>
                        <iframe src="{{ asset('juego_pdfs/'.$pdfs->pdf) }}" width="100%" height="600px"></iframe>
                    </p>
                @else
                    <p>No hay reglas del juego disponibles.</p>
                @endif
            </div>

            <div>
                <strong>IMAGEN:</strong>
                <div class="flex mt-4">
                    @foreach($images as $image)
                        <div class="cont-img mt-4 mt-3 mb-6">
                            <img src="{{('/juego_images/'.$image->image)}}" width="350" height="180">
                        </div>
                    @endforeach
                </div>
            </div>



            <a href="/admin/games" class="btn btn-primary mt-4">Back</a>


        </div>

    </div>

@endsection







