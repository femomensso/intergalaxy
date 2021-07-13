@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Pedidos
                </div>
                <table border="1px solid black">
                    <tr> 
                        <td>ID</td>
                        <td>ID Usuario</td>
                        <td>ID Produto</td>
                        <td>Status</td>
                        <td colspan="2">Ordens</td>
                    </tr>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->id_usuario}}</td>
                            <td>{{$pedido->id_produto}}</td>
                            <td>{{$pedido->status}}</td>
                            <td><a href="{{ route('aprovar-pedido', ['id'=>$pedido->id]) }}">Aprovar</a></td> 
                            <td><a href="{{ route('cancelar-pedido', ['id'=>$pedido->id]) }}">Cancelar</a></td>
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