<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Relatorio</h1>
    </header>

    <div>
        {!! Form::open([null, 'method' => 'POST', 'name' => 'form']) !!}
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', isset($relatorio)?$relatorio->nome:null, ['placeholder'=>'Informe o nome:', ($form)??null]) !!}

            <br>

            {!! Form::label('valor_pago', 'Valor pago: ') !!}
            {!! Form::number('valor_pago', isset($relatorio)?$relatorio->valor_pago:null, ['placeholder'=>'Informe o valor pago:', ($form)??null]) !!}

            <br>

            {!! Form::label('data', 'Data da compra: ') !!}
            {!! Form::text('data', isset($relatorio)?$relatorio->data_compra:null, ['placeholder'=>'Informe a data da compra:', ($form)??null]) !!}

            <br>

            {!! Form::label('descricao', 'Descrição da venda: ') !!}
            {!! Form::text('descricao', isset($relatorio)?$relatorio->descricao:null , ['placeholder'=>'Informe a Descrição da venda:' ,($form)??null]) !!}

            <br>

            {{-- {!! Form::select('produtos', $produtos) !!} --}}

            {!! Form::submit('Salvar') !!}

        {!! Form::close() !!}

    </div>
</body>
</html>
