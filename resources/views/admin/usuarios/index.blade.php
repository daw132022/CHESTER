@extends('admin.index')

@section('titulo', 'Usuarios')

@section('contenido')

    <div class="container">
        <h1>Usuarios</h1>

        <a href="{{url('admin/user/add')}}" class="btn btn-success mt-5">Añadir usuario</a>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nombre usuario</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Roll</th>
                <th width="220px">Acción</th>
            </tr>

            <?php
            foreach($users as $user){
                $id = $user->id;
                ?>
            <tr>
                <td><?= $user->id?></td>
                <td><?= $user->nombre?></td>
                <td><?= $user->apellidos?></td>
                <td><?= $user->nombre_usuario?></td>
                <td><?= $user->telefono?></td>
                <td><?= $user->direccion?></td>
                <td><?= $user->email?></td>
                <td><?= $user->roll_id?></td>
                <td>
                    <form  action="{{url('admin/user/delete/'.$id)}}" method="post">
                        @csrf
                        @method('delete')
                    <a href="{{url('admin/user/'.$user->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{url('admin/user/edit/'.$user->id)}}" class="btn btn-primary">Editar</a>
                    <button type="submit"  class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

        <!-- PAGINACIÓN -->

        <div class="pagination-container">
            <ul class="pagination">
                @if ($users->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev"><i class="fas fa-chevron-left"></i></a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">{{ $users->currentPage() }}</span>
                </li>

                @if ($users->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a>
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
