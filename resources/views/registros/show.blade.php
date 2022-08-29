@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="registros">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Boucher</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->Nombre}}</td>
                            <td>{{$registro->Apellido}}</td>
                            <td>{{$registro->Correo}}</td>
                            <td>{{$registro->Telefono}}</td>
                            <td><img src="{{$registro->Boucher}}" alt="Imagen Boucher" width="200px" height="100px"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
