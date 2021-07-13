@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Meus Pedidos
                </div>
                <table border="1px solid black">
                    <tr> 
                        <td>ID</td>
                        <td>ID Produto</td>
                        <td>Status</td>
                        <td colspan="2">Ordens</td>

                    </tr>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->id_produto}}</td>
                            <td>{{$pedido->status}}</td>
                            <td><a href="{{ route('pagar-meu-pedido', ['id'=>$pedido->id, 'acao'=>'pagar']) }}">Pagar</a></td> 
                            <td><a href="{{ route('cancelar-meu-pedido', ['id'=>$pedido->id]) }}">Cancelar</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection