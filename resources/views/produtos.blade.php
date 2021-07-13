@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Meus Produtos
                </div>
                <table border="1px solid black">
                    <tr> 
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Descricao</td>
                        <td>Preco</td>
                        <td>Ordens</td>
                    </tr>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>R$ {{$produto->preco}}</td>            
                            <td><a href="{{ route('apagar-produto', ['id'=>$produto->id]) }}">Apagar</a></td>
                        </tr>
                    @endforeach

                </table>
                
                <div class="row justify-content-center" style="margin: 10px">
                    <a href="{{ route('cadastrar-produto') }}">
                        <button type="button" class="btn btn-primary">
                            Cadastrar novo produto
                        </button>
                    </a>
                </div>
               
                
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
                        <a href="{{ route('usuarios') }}">
                            <button type="button" class="btn btn-primary">
                                Usuarios
                            </button>
                        </a>
                    </div>
                </div>                                     
            </div>
        </div>
    </div>
</div>
@endsection