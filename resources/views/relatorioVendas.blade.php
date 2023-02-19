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
        <h1>Relatorio de vendas</h1>
    </header>

    <a href="{{route('relatorio.create')}}">Nova venda</a>
    <br>
    <a href="{{route('produtos.index')}}">Produtos cadastrados</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relatorio_vendas as $relatorio)
            <tr>
                <td>{{$relatorio->nome}}</td>
                <td>
                    <a href="{{route('relatorio.show', $relatorio->id)}}">Visualizar</a>
                    <a href="{{route('relatorio.edit', $relatorio->id)}}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
