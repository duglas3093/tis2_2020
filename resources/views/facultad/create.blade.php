@extends('layouts.main')
@section('content')
    <form action="{{ url('/facultad') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre de la Facultad</label>
            <input class="form-control" type="text" name="facultad_nombre" id="facultad_nombre" value="" required>
        </div>
        <input class="btn btn-primary" type="submit" value="Agregar">
        <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="btn btn-danger">Cancelar</a>
    </form>
@endsection