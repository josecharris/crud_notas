@extends('plantilla')

@section('content')
  <h3 class="text-center mb-3 pt-3">Editar nota {{$notaActualizar->id}} </h3>

    <form method="post" action="{{route('update', $notaActualizar->id) }}">
      @method('put')
      @csrf
      <div class="form-group">
        <input type="text" name="nombre" value="{{$notaActualizar->nombre}}"
        id="nombre" class="form-control">
      </div>

      <div class="form-group">
        <input type="text" name="descripcion" value="{{$notaActualizar->descripcion}}"
        id="descripcion" class="form-control">
      </div>

      <button type="submit" class="btn btn-warning btn-block">Editar nota</button>

    </form>
    @if(session('update'))
      <div class="alert alert-success mt-3">
        {{session('update')}}
      </div>
    @endif
@endsection
