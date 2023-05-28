@extends('admin.index')

@section('titulo', 'Juegos')

@section('contenido')

    <div class="container">
        <h1>Juegos</h1>

        <a href="{{url('admin/game/add')}}" class="btn btn-success">Añadir juego</a>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>Título juego</th>
                <th>Max jugadores</th>
                <th>Min jugadores</th>
                <th>Tiempo juego </th>
                <th>Descripcción</th>
                <th>Reglas juego</th>
                <th>Imagen</th>
                <th width="220px">Acción</th>
            </tr>
            <?php
            foreach($juegos as $juego){
                $id = $juego->id;
                ?>
            <tr>
                <td><?= $juego->id?></td>
                <td><?= $juego->titulo_juego?></td>
                <td><?= $juego->max_jugadores?></td>
                <td><?= $juego->min_jugadores?></td>
                <td><?= $juego->tiempo_juego?></td>
                <td><?= $juego->descripccion?></td>
                <td><?= $juego->reglas_juego?></td>
                <td><?= $juego->images->count()?></td>
                <td>
                    <form  action="{{url('admin/game/delete/'.$id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{url('admin/game/'.$juego->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{url('admin/game/edit/'.$juego->id)}}" class="btn btn-primary">Editar</a>
                        <button type="submit"  class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

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

    </div>


@endsection
