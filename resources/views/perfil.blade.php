@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perfil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{$usuario->name}}
                    <hr>
                    {{$usuario->email}}
                    <hr>
                    <a href="{{ route('editar-perfil')}}">Editar perfil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center" style="margin: 10px">
                        <a href="{{ route('meus-pedidos') }}">
                            <button type="button" class="btn btn-primary">
                                Meus pedidos
                            </button>
                        </a>
                    </div>
                </div>                                     
            </div>
        </div>
    </div>
</div>
@endsection
