@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-auto p-5 text-center">
        <h1><strong>Catálogo</strong> </h1>
    </div>
</div>
<div class="container" style="margin-top: 10px">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <hr>
            <div class="row">
                @foreach ($productos as $prod)
                <div class="col-lg-3">
                    <div class="card text-center" style="margin-bottom: 20px; height: 410px;">
                        <br>
                        <strong class="text-center">{{ $prod->nombre }}</strong>
                        <br>
                        <div style="height: 100%; width: 100%">
                            <img id="imagen" src="{{ asset('storage') . '/' . $prod->imagen }}" style="height: auto; width: 100px;display: block;" alt="Imágen del RED" class="card-img-top mx-auto" />
                            <div class="card-body">
                                <p class="card-text"><strong>Codigo: </strong>{{ $prod->codigo }}</p>
                                <p class="card-text"><strong>Descripción: </strong>{{ $prod->descripcion }}</p>
                                <p class="card-text"><strong>precio:
                                    </strong>{{ $prod->precio }}</p>
                            </div>
                            <div>
                                <div class="float-right">
                                    <a href="{{ route('ventas.create', ['codigo' => $prod->codigo]) }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                        {{ __('Comprar') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <hr>
                <div class="col-auto p-5 text-center">
                    <a class="ml-4 text-sm btn btn-primary" href="/users">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    @endsection