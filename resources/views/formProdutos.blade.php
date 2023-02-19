<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Cadastrar Produto</h1>
    </header>

    <div>
        {!! Form::open(['route' => 'produtos.store','method' => 'POST', 'name' => 'form']) !!}
            {!!Form::label('nome', 'Nome: ')!!}
            <br>
            {!!Form::text('nome', isset($produto)?$produto->nome:null, ['placeholder'=>'Informe o nome:', ($form)??null]) !!}
            <br>

            {!! Form::label('preco', 'Preço:') !!}
            {!! Form::text('preco', isset($produto)?$produto->preco:null, ['placeholder' => 'Informe o preço' ,($form)??null]  ) !!}

            <br>
            {!! Form::submit('Salvar')!!}

        {!! Form::close() !!}
    </div>

</body>
</html>

