<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Crud laravel</title>
    
</head>

<body class="body-form">
    <div>
        <a href="{{ route('relatorio.index') }}">
            <img src="{{ asset('images/left.png') }}" alt="btn-voltar" class="btn-voltar-form">
        </a>


        <div class="container-form">
            <header>
                <h1 class="text-center mt-5">
                    @if (isset($relatorio))
                        Editar Relatorio
                    @else
                        Relatorio
                    @endif
                </h1>
                <hr>
            </header>

            @if (isset($relatorio))
                <form name="formEdit" id="formEdit" method="POST"
                    action="{{ route('relatorio.update', $relatorio->id) }}">
                    @method('PUT')
                @else
                    <form name="formCad" id="formCad" method="POST" action="{{ route('relatorio.store') }}">
            @endif


            <div>
                <form name="formCad" id="formCad" method="POST" action="{{ route('relatorio.store') }}">
                    @csrf
                    <input class="form-control " type="text" name="nome" id="nome" placeholder="Nome: "
                        value="{{ $relatorio->nome ?? '' }}"> <br>

                    <input class="form-control " type="text" name="valor_pago" id="valor_pago"
                        placeholder="Valor pago: " value="{{ $relatorio->valor_pago ?? '' }}"> <br>

                    <input class="form-control" type="date" name="data_compra" id="data_compra"
                        placeholder="Data da compra: " value="{{ $relatorio->data_compra ?? '' }}"> <br>

                    <input class="form-control" type="text" name="descricao" id="descricao"
                        placeholder="Descrição da venda: " value="{{ $relatorio->descricao ?? '' }}"> <br>

                    <select class="form-control" name="produto_id" id="produto_id">
                        <option value="{{ $relatorio->produtoRelationship->id ?? '' }}">
                            {{ $relatorio->produtoRelationship->nome ?? 'Produto:' }}</option>
                        @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endforeach
                    </select> <br>

                    <input class="btn btn-primary " type="submit"
                        value="@if (isset($relatorio)) Editar @else Cadastrar @endif">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
