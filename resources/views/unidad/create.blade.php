@extends('layouts.main')
@section('content')
    <form action="{{ url('facultad/'.$facultad_id.'/unidad/store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre de la Unidad</label>
            <input class="form-control" type="text" name="unidad_nombre" id="unidad_nombre" value="" required>
        </div>
        {{-- <div class="form-group">
            <input class="form-control" type="text" name="facultad_id" id="facultad_id" value="{{ $facultad_id }}" hidden>
        </div> --}}
        <input class="btn btn-primary" type="submit" value="Agregar">
        <a href="{{ url('facultad/'.$facultad_id.'/unidad') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection