@extends('layouts.app')

@section('content')

    <a class="btn btn-success" href="{{route('pruebas.create')}}">Crear</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Opciones</th>

        </tr>
        </thead>
        <tbody>
        @foreach($pruebas as $prueba)
        <tr>
            <th scope="row">{{$prueba->id_prueba}}</th>
            <td>{{$prueba->descripcion}}</td>
            <td><a href="{{route('pruebas.edit', ['prueba'=>$prueba->id_prueba])}}" class="btn btn-warning">Edit</a>
                <a class="btn btn-danger" href="javascript:void(0)"
                   onclick="eliminar({{$prueba->id_prueba}})">Eliminar</a>
            </td>
            <form id="delete-{{$prueba->id_prueba}}"
                  action="{{route('pruebas.destroy',['prueba'=>$prueba])}}" method="POST"
                  style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </tr>
        @endforeach


        </tbody>
    </table>
    @push('script')
        <script>
            function eliminar(id) {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "Ya no podras restaurar esta informacion!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminalo!',
                    cancelButtonText: 'No, Pls!'

                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-' + id).submit();
                    }
                })
            }


        </script>
    @endpush

@endsection
