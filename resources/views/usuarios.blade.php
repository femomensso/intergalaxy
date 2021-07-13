@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <table border="1px solid black">
                    <tr> 
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Ordens</td>
                    </tr>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>           
                            <td><a href="{{ route('editar-perfil', ['id'=>$usuario->id]) }}">Editar</a></td>
                        </tr>
                    @endforeach

                </table>                
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center" style="margin: 10px">
                        <a href="{{ route('pedidos') }}">
                            <button type="button" class="btn btn-primary">
                                Pedidos
                            </button>
                        </a>
                    </div>
                </div>                                     
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center" style="margin: 10px">
                        <a href="{{ route('produtos') }}">
                            <button type="button" class="btn btn-primary">
                                Produtos
                            </button>
                        </a>
                    </div>
                </div>                                     
            </div>
        </div>
    </div>
</div>
@endsection