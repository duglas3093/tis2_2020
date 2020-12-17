@extends('layouts.main')
@section('content')
    <form action="{{ url('/unidad/edit') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="Nombre">Nombre de la Unidad</label>
        <input type="text" name="unidad_nombre" id="unidad_nombre" value="">

        <input type="submit" value="Agregar">
    </form>
@endsection