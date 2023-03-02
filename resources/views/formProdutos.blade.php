<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Crud laravel</title>
</head>

<body class="body-form">
    <div style="display: flex;">
        <a href="{{ route('produtos.index') }}">
            <img src="{{ asset('images/left.png') }}" alt="btn-voltar" class="btn-voltar">
        </a>
    </div>
    <div class="container-form-produtos">
        <header>
            <h1 class="text-center mt-5">
                @if (isset($produto)) Editar Produto @else Cadastrar @endif
            </h1>
        </header>


        @if (isset($produto))
            <form name="formEdit" id="formEdit" method="POST" action="{{ route('produtos.update', $produto->id) }}">
                @method('PUT')
            @else
                <form name="formCad" id="formCad" method="POST" action="{{ route('produtos.store') }}">
        @endif
        @csrf

        <div class="col-md-6 offset-md-3">
            <form name="formCad" id="formCad" method="POST" action="{{ route('produtos.store') }}">
                @csrf
                <input class="form-control mt-4" type="text" name="nome" id="nome" placeholder="Nome: "
                    value="{{ $produto->nome ?? '' }}"> <br>

                <input class="form-control mt-2 mb-2" type="text" name="preco" id="preco" placeholder="Preço: "
                    value="{{ $produto->preco ?? '' }}"> <br>

                <input class="btn btn-primary " type="submit"
                    value="@if (isset($produto)) Editar @else Cadastrar @endif">
            </form>
        </div>
    </div>
</body>
</html>
