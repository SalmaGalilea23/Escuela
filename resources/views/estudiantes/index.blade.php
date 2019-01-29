@extends('estudiantes.layout')

@section('content')
<h1 class="text-center">LISTA DE ESTUDIANTES</h1>
<hr>

<div class="container">
    <a class="btn btn-primary mb-3" href="{{ route('estudiantes.create') }}">Crear estudiante</a>
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Telefono</th>
            <th class="text-center" colspan="2" scope="col">Acciones</th>
      
          </tr>
        </thead>
        <tbody>
            @foreach$estudiante = estudiante::all();
              <tr>
                <th scope="row">{{ $estudiante->id }}</th>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellidoPaterno }}</td>
                <td>{{ $estudiante->apellidoMaterno }}</td>
                <td>{{ $estudiante->telefono }}</td>
                <td><a class="btn btn-info " href="{{ route( 'estudiantes.edit',$estudiante->id) }}"><i class="far fa-edit"></i></a> </td>
                <td>
                  <a class="btn btn-danger" data-toggle="modal" data-target="#confirmarBorrar-{{ $estudiante->id }}" ><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              @include('estudiantes.confirmarBorrar')
              @endforeach
          
              
            </tbody>
          </table>
          
          {{$estudiante->links()}}
          </div>
          @endsection
          
           
      