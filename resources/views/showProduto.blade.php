@extends('templates.template')
@section('content')

<h1 class="text-center mt-5 mb-5">Visualizar</h1> <hr>

<div class="col-md-6 offset-md-3">
    Nome: {{$produto->nome}} <br>
    Preco: {{$produto->preco}} <br>
</div>

@endsection
