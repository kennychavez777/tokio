@extends('sede.layout')
 
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lista de Sedes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('sede.create') }}">Agregar</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Número de complejos</th>
            <th>Presupuesto</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sedes as $sede)
        <tr>
            <td>{{ $sede->getOriginal()['ID_SEDE_OLIMPICA'] }}</td>
            <td>{{ $sede->getOriginal()['NOMBRE'] }}</td>
            <td>{{ $sede->getOriginal()['UBICACION'] }}</td>
            <td>{{ $sede->getOriginal()['NO_COMPLEJOS'] }}</td>
            <td>${{ $sede->getOriginal()['PRESPUESTO'] }}</td>
            <td>
                <form action="{{ route('sede.destroy', $sede) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a class="btn btn-primary" href="{{ route('sede.edit',$sede->getOriginal()['ID_SEDE_OLIMPICA']) }}">Editar</a>
                        <button type="submit" class="btn btn-danger" >Eliminar</button>
                </form>    
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection