@extends('admin.index')

@section('titulo', 'Noticias')

@section('contenido')

    <div class="container" id="ver-usuario">
        <h1>Ver noticia</h1>

        <div class="lista-usuario">
            <div class="mt-5">
                <strong>ID:</strong>
                <p><?= $noticia->id?></p>
            </div>

            <div>
                <strong>TÍTULO NOTICIA:</strong>
                <p><?= $noticia->titulo_noticia?></p>
            </div>

            <div>
                <strong>FECHA:</strong>
                <p><?= $noticia->fecha?></p>
            </div>

            <div>
                <strong>CATEGORÍA:</strong>
                <p><?= $noticia->categoria?></p>
            </div>

            <div>
                <strong>TEXTO NOTICIA:</strong>
                <p><?= $noticia->texto_noticia?></p>
            </div>

            <div>
                <strong>IMAGEN:</strong>
                <div class="flex mt-4">
                @foreach($images as $image)
                    <div class="cont-img mt-4 mb-6">
                    <img src="{{('/noticia_images/'.$image->image)}}" width="350" height="180">
                    </div>
                @endforeach
                </div>
            </div>


            <a href="/admin/news" class="btn btn-primary mt-4">Back</a>
            <a href="{{('/admin/user/comments/' .$noticia->id)}}" class="btn btn-primary mt-4">Ver comentarios</a>

        </div>

    </div>

@endsection







