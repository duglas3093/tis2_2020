@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h4>Crear una Materia</h4>
                    <br>
                    <form action="{{ url('facultad/'.$facultad_id.'/materia/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cod_materia">Código de Materia</label>
                                    <input class="form-control" type="text" name="materia_codigo" id="materia_codigo" required>
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Nombre">Nombre de la Materia</label>
                                    <input class="form-control" type="text" name="materia_nombre" id="materia_nombre" value="" required>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="unidad_id">Unidad</label>
                                <select class="form-control" name="unidad_id" id="unidad_id">
                                    @foreach ($unidads as $unidad)
                                        <option value="{{ $unidad->unidad_id }}">{{ $unidad->unidad_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <input class="btn btn-success" type="submit" value="Agregar">
                        <a href="{{ url('facultad/'.$facultad_id.'/materia') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection