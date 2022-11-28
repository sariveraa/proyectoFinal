@extends('layouts.app')

@section('content')

<body style="background-color:#FFD1E9;margin-top:0px;margin-left:0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <nav class="navbar navbar-dark bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="#">
                            </a>
                        </div>
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">SAMTA</a>
                        </div>
                    </nav>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center">SAMTA ADMINISTRADOR</h1>
                            </div>

    </div>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-secondary">Administrar Usuarios</button>
        </div>
        <div class="container">
                            <div class="justify-content-center">
                                <a class="btn btn-success" class="ml-4 " style="font-size:90%;                                color:white;
                                width:100px;
                                height:100px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/productos">Administrar docentes</a>
                            </div>
        <div class="btn-group" role="group" aria-label="Third group">
          <button type="button" class="btn btn-secondary">Registrar nuevo administrador</button>
        </div>
              <br>
      <br>
      <div class="copyright"> © 2022 Copyright by Salome Rivera y Laura Quintero. All Rights Reserved. </div>
      <br>
      </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
</body>

@endsection