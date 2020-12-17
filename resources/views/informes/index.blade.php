@extends('layouts.main')
@section('title', 'Panel de administración')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Formulario de control de avanze en clase virtual</h2>   
                        </div>
                        <div class="col-md-4 mt-5">
                            <h3>Facultad de Ciencias y Técnologia</h3>
                            <h4>Departamento de informatica y sistemas</h4>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="pull-right">
                                <button type="button" class="btn btn-outline-primary btn-xs ml-0">Reporte Diario</button>
                            </div>
                            <br>
                            <br>
                            {{-- <ul class="list-group list-group-horizontal  col-md-12">
                                <li class="list-group-item"><b>Docente:</b> <span>Jane Done</span></li>
                                <li class="list-group-item"><b>Codigo Sis:</b> <span>201004750</span></li>
                                <li class="list-group-item"><b>Meses:</b><span> </span>Octubre-Noviembre</li>
                                <li class="list-group-item"><b>Fecha:</b><span> </span>16-10-2020 al 15-11-2020 </li>
                            </ul> --}}
                            
                            <span class="mr-5 ml-5" style="font-size:10pt;"><b>Docente:</b> Jane Done</span>
                            <span class="mr-5 ml-5" style="font-size:10pt;"><b>Codigo:</b> 201004750</span>
                            <span class="mr-5 ml-5" style="font-size:10pt;"><b>Meses:</b> Octubre-Noviembre</span>
                            <span class="mr-5 ml-5" style="font-size:10pt;"><b>Fecha:</b> 16-10-2020 al 15-11-2020</span>
                            
                        </div>
                    </div>
                    <div class="row"></div>
                    <table class="table table-striped" style="font-size: 10pt;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Contenido de la Clase</th>
                                <th scope="col">Plataforma o medio <br> utilizado</th>
                                <th scope="col">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>18-11-2020</td>
                                <td>8:15-9:45</td>
                                <td class="text-center">3</td>
                                <td>Calculo II</td>
                                <td>Resolucion del examen de primer parcial</td>
                                <td>Google Meet, Classroom, Google form</td>
                                <td>Ninguna</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>18-11-2020</td>
                                <td>9:45-11:15</td>
                                <td class="text-center">3</td>
                                <td>Calculo I</td>
                                <td>Avanze teorico y práctico de derivadas</td>
                                <td>Classroom, Google meet, pizzarra virtual,etc.</td>
                                <td>Ninguna</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>18-11-2020</td>
                                <td>15:45-17:15</td>
                                <td class="text-center">3</td>
                                <td>Base de datos I</td>
                                <td>Algebra relacional</td>
                                <td>Google Meet, pizarra virtual, google Classroom</td>
                                <td>Ninguna</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection