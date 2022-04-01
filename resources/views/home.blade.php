@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">Connexion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté
                </div> --}}
            </div>
        </div>
    </div>
    <div id="app">
            {{-- <example-component></example-component> --}}
            <h4>Bonjour </h4>
            <h4>{{ Auth::user()->name }}<h4>
            <acceuil-component></acceuil-component>
            
        </div>
</div>
@endsection
