@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}soy un usuario</div>
                <h1></h1>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 10px">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <hr>
            <div class="row">
                <div class="justify-content-center">
                    <a href="/catagaloProd">ho</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
