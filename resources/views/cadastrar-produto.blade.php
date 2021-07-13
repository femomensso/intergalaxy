@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('cadastra-produto') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Descricao</label>

                            <div class="col-md-6">
                                <textarea id="descricao" type="text" class="form-control" name="descricao" required>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="preco" class="col-md-4 col-form-label text-md-right">Preco</label>

                            <div class="col-md-6">
                                <input id="preco" type="number" step="0.01" class="form-control" name="preco" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection