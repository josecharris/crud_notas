@extends('plantilla')

@section('content')
  <div class="row">
    <div class="col-md-7">

    </div>
    <div class="col-md-5">
      <h3 class="text-center mb-4">Agregar notas</h3>

      <form action="{{route('store')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="nombre" value="nombre" class="form-control"
          placeholder="Nombre de la nota:" required>
          <br>
          <input type="text" name="descripcion" value="descripcion" class="form-control"
          placeholder="Escriba la descripción:" required>
          <br>
          <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </div>
      </form>
      @if(session('agregar'))
      <div class="alert alert-success mt-3">
        {{session('agregar')}}
      </div>
      @endif
    </div>
  </div>
@endsection
