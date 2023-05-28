@extends('admin.index')

@section('titulo', 'Comentarios')

@section('contenido')

    <div class="container">
        <h1>Comentarios</h1>
        <a href="{{url('admin/comment/add')}}" class="btn btn-success">Añadir comentario</a>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>Texto comentario</th>
                <th>user_id</th>
                <th>noticia_id</th>
                <th width="220px">Acción</th>
            </tr>
            <?php
            foreach($comentarios as $comentario){
                $id = $comentario->id;
                ?>
            <tr>
                <td><?= $comentario->id?></td>
                <td><?= $comentario->texto?></td>
                <td><?= $comentario->user_id?></td>
                <td><?= $comentario->noticia_id?></td>
                <td>
                    <form  action="{{url('admin/comment/delete/'.$comentario->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{route('admincomment.show',$comentario->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{url('admin/comment/edit/'.$comentario->id)}}" class="btn btn-primary">Editar</a>
                        <button type="submit"  class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

        <!-- PAGINACIÓN -->

        <div class="pagination-container">
            <ul class="pagination">
                @if ($comentarios->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $comentarios->previousPageUrl() }}" rel="prev"><i class="fas fa-chevron-left"></i></a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">{{ $comentarios->currentPage() }}</span>
                </li>

                @if ($comentarios->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $comentarios->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a>
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
