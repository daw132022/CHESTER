@extends('admin.index')

@section('titulo', 'Noticias')

@section('contenido')

    <div class="container">
        <h1>Noticias</h1>

        <a href="{{url('admin/new/add')}}" class="btn btn-success mt-5">Añadir noticia</a>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>Título noticia</th>
                <th>Fecha</th>
                <th>Categoría</th>
                <th>Texto noticia</th>
                <th>Imagen</th>
                <th width="220px">Acción</th>
            </tr>

            <?php
            foreach($noticias as $noticia){
                $id = $noticia->id;
                ?>
            <tr >
                <td><?= $noticia->id?></td>
                <td><?= $noticia->titulo_noticia?></td>
                <td><?= $noticia->fecha?></td>
                <td><?= $noticia->categoria?></td>
                <td><?= $noticia->texto_noticia?></td>
                <td><?= $noticia->images->count()?></td>
                <td>
                    <form  action="{{url('admin/new/delete/'.$id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{url('admin/new/'.$noticia->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{url('admin/new/edit/'.$noticia->id)}}" class="btn btn-primary">Editar</a>
                        <button type="submit"  class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

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

    </div>

@endsection
