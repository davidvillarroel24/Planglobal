@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Lista de Usuarios
        </h3>

        <div class="card-tools">

            <a href="#"
               class="btn btn-primary btn-sm">

                <i class="fas fa-plus"></i>
                Nuevo Usuario

            </a>

        </div>

    </div>

    <div class="card-body">

        <table id="tablaUsuarios"
               class="table table-bordered table-striped">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Creado</th>
                    <th width="120">Acciones</th>
                </tr>

            </thead>

            <tbody>

                @foreach($usuarios as $usuario)

                    <tr>

                        <td>{{ $usuario->id }}</td>

                        <td>{{ $usuario->name }}</td>

                        <td>{{ $usuario->dni }}</td>

                        <td>{{ $usuario->email }}</td>

                        <td>{{ $usuario->created_at->format('d/m/Y') }}</td>

                        <td>

                            <a href="#"
                               class="btn btn-warning btn-sm">

                                <i class="fas fa-edit"></i>

                            </a>

                            <a href="#"
                               class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </a>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection


@section('scripts')

<script>
    $(function () {

        $('#tablaUsuarios').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
            }
        });

    });
</script>

@endsection