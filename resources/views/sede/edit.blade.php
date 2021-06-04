@extends('sede.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar sede</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hay un problema con el contenido del formulario.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<div class="container">
    <form action="{{ route('sede.update', $sede['ID_SEDE_OLIMPICA']) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="form-group col-md-12 my-form-element">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="true" value="{{ $sede['NOMBRE'] }}">
            </div>
            <div class="form-group col-md-12 my-form-element">
                <strong>Ubicación:</strong>
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" required="true" value="{{ $sede['UBICACION'] }}">
            </div>
        
            <div class="form-group col-md-12 my-form-element">
                <strong>Número de complejos:</strong>
                <input type="number" name="no_complejos" class="form-control" placeholder="Número de complejos" required="true" value="{{ $sede['NO_COMPLEJOS'] }}">
            </div>
            <div class="form-group col-md-12 my-form-element">
                <strong>Presupuesto:</strong>
                <input type="number" name="prespuesto" class="form-control" placeholder="Presupuesto" required="true" value="{{ $sede['PRESPUESTO'] }}">
            </div>
            <div class="col-md-6 my-form-element">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{ route('sede.index') }}"> Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection