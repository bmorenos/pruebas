@extends('layouts.app')

@section('content')

    <ul class="text-danger p-3">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <form action="{{route('pruebas.update', ['prueba'=>$prueba->id_prueba])}}" class="container" method="post">
        <div class="mb-3">
            @csrf
            @method('patch')
            <label for="exampleInputEmail1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" value="{{$prueba->descripcion}}"name="descripcion">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
