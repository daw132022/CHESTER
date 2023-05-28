@extends('admin.index')

@section('titulo', 'Juegos_fav')

@section('contenido')

    <div class="container">
        <h1>Juegos favoritos</h1>
        <a href="{{url('admin/gamefav/add')}}" class="btn btn-success">Añadir juego favorito</a>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>user_id</th>
                <th>juego_id</th>
                <th width="220px">Acción</th>
            </tr>
            <?php
            foreach($juegos_fav as $juego_fav){
                $id = $juego_fav->id;
                ?>
            <tr>
                <td><?= $juego_fav->id?></td>
                <td><?= $juego_fav->user_id?></td>
                <td><?= $juego_fav->juego_id?></td>
                <td>

                    <form  action="{{url('admin/gamefav/delete/'.$juego_fav->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{route('adminjuego_fav.show',$juego_fav->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{url('admin/gamefav/edit/'.$juego_fav->id)}}" class="btn btn-primary">Editar</a>
                        <button type="submit"  class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

        <!-- PAGINACIÓN -->

        <div class="pagination-container">
            <ul class="pagination">
                @if ($juegos_fav->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $juegos_fav->previousPageUrl() }}" rel="prev"><i class="fas fa-chevron-left"></i></a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">{{ $juegos_fav->currentPage() }}</span>
                </li>

                @if ($juegos_fav->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $juegos_fav->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a>
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
