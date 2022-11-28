@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a SAMTA</div>
                <h1></h1>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    
                </div>
                <div class="container">
                            <div class="justify-content-center">
                                <a class="btn btn-success" class="ml-4 " style="font-size:90%;                                color:white;
                                width:100px;
                                height:100px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/catagaloProd">Catalogo de productos</a>
                            </div>
                            <br>
            </div>
        </div>
    </div>
</div>


@endsection
