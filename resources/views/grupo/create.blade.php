@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h4>Crear un Grupo</h4>
                    <br>
                    <form action="{{ url('facultad/'.$facultad_id.'/materia/'.$materia_id.'/grupo/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Nombre">#numero de grupo</label>
                                    <input class="form-control" type="number" name="grupo_numero" id="grupo_numer" value="" min="1" required>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-4" hidden>
                            <div class="form-group">
                                <label for="cod_carrera">Código de Carrera</label>
                                <input class="form-control" type="text" name="carrera_codigo" id="carrera_codigo" requiered>
                            </div>
                        </div> --}}
{{-- 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="materia_id">Materia</label>
                                <select class="form-control" name="materia_id" id="materia_id">
                                    @foreach ($materias as $materia)
                                        <option value="{{ $materia->materia_id }}">{{ $materia->materia_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
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
                        <a href="{{ url('facultad/'.$facultad_id.'/materia/'.$materia_id.'/grupo') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection