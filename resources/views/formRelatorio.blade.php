@extends('templates.template')
@section('content')
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

        {{-- <h1>{{isset($relatorio)?$produtos->get($relatorio->produto_id):'null'}}</h1> --}}

        {!! Form::label('produto', 'Produto:') !!}

        @foreach ($produtos as $produto)
            {!! Form::radio('produto[]', $loop->iteration, isset($relatorio) &&($relatorio->produto->find($loop->iteration) !== null),[ ($form)??null])!!}
            {!! Form::label('produto[]', $produto) !!}
        @endforeach

        <br>
        {!! Form::submit('Salvar') !!}
    {!! Form::close() !!}

</div>
@endsection
