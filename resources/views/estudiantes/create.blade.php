@extends('estudiantes.layout')

@section('content')
<h1 class="text-center mt-2">AGREGAR Estudiante</h1>
<hr>

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


<div class="container">
@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> Algunos campos son requeridos.
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul> 
  </div>
@endif

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="{{ route('estudiantes.store') }}" method="post">
        @csrf

     <div class="form-group ">
      <label class="control-label requiredField" for="nombre">
       Nombre
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Inserta el nombre " type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="ApellidoPaterno">
       Apellido Paterno
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="ApellidoPaterno" name="ApellidoPaterno" value="{{ old('apellidopaterno') }}" placeholder="Insertar el Apellido Paterno" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="ApellidoMaterno">
       Apellido Materno
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" value="{{ old('apellidoMaterno') }}" placeholder="Insertar el Apellido Materno" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="name6">
       Telefono
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name6" name="name6" placeholder="Insertar Numero Telefonico" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
       <a class="btn btn-success float-right" href="{{ route('estudiantes.index') }}">Regresar</a>
      </div>
     </div>
    </form>
   </div>
   <div class="col-md-6">
       <img src="img-fluid" width="600" src="{{ asset('image/book')}}" alt="">
   </div>
  </div>
 </div>

</div>

@endsection
