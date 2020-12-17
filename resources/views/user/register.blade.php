@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/umss.png') }}" width="100%" alt="">
                            </div>
                            <div class="col-md-6">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerUser') }}">
                                    {{ csrf_field() }}
                                    @if ($add == 1)
                                        <h1 class="text-center">Registrar Personal Administrativo</h1>
                                    @else
                                        <h1 class="text-center">Registrar Personal Académico</h1>
                                    @endif
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                                        <div class="">
                                            <input placeholder="Nombre" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholder="Apellido" id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
            
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('user_ci') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholder="Carnet de Identidad" id="user_ci" type="number" class="form-control" name="user_ci" value="{{ old('user_ci') }}" min="0" required>
            
                                            @if ($errors->has('user_ci'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('user_ci') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('user_phone') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholder="Número Celular" id="user_phone" type="number" class="form-control" name="user_phone" value="{{ old('user_phone') }}" min="0" required>
            
                                            @if ($errors->has('user_phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('user_phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('user_codsis') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input placeholder="Codigo SIS" id="user_codsis" type="number" class="form-control" name="user_codsis" value="{{ old('user_codsis') }}" min="0" required> 
            
                                            @if ($errors->has('user_codsis'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('user_codsis') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('rol_id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <select class="form-control" name="rol_id" id="rol_id">
                                                @if ($add == 1)
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Decano</option>
                                                    <option value="3">Director de Dep.</option>
                                                    <option value="4">Director Academico</option>
                                                @else
                                                    <option value="5">Docente</option>
                                                    <option value="6">Aux. Docente</option>
                                                    <option value="7">Aux. laboratorio</option>
                                                @endif
                                            </select>
                                            {{-- <input id="rol_id" type="number" class="form-control" name="rol_id" value="{{ old('rol_id') }}"> --}}
                                            
                                            @if ($errors->has('rol_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('rol_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('user_nac') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de Nacimiento" id="user_nac" type="date" class="form-control" name="user_nac" value="{{ old('user_nac') }}" required>
            
                                            @if ($errors->has('user_nac'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('user_nac') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('facultad_id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <select class="form-control" name="rol_id" id="rol_id">
                                                    <option value="1">Ciencias y Tecnologia</option>
                                                    <option value="2">Economia</option>
                                                    <option value="3">Medicina</option>
                                                    <option value="4">Humanidades y Cs de la Educacion</option>
                                            </select>
                                            {{-- <input id="facultad_id" type="number" class="form-control" name="facultad_id" value="{{ old('facultad_id') }}">
             --}}
                                            @if ($errors->has('facultad_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('facultad_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>
            
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            
                                        <div class="col-md-6">
                                            <input placeholer="Confirmación de contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
