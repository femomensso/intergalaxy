@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Produto
                </div>

                {{$produto->nome}}
                <hr>
                {{$produto->descricao}}
                <hr>
                R$ {{$produto->preco}}
                <hr>
                @if (Auth::user())
                    <a href="{{ route('comprar-produto', ['id_produto'=>$produto->id]) }}">
                        Comprar
                    </a>
                @endif
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection