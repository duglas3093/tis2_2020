@extends('layouts.main')
@section('title', 'Panel de administración')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel ">
                <h1 class="text-center">Bienvenido {{ Auth::user()->name }}</h1>
                <div class="contianer-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/umss.png') }}" width="90%" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('images/rectorado-2.jpg') }}" width="90%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
