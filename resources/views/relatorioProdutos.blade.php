<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <header>
        <h1>Lista de Produtos</h1>
    </header>

    <a href="{{route('produtos.create')}}">Novo Produto</a>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>
                            <a href="{{route('produtos.show', $produto->id)}}">Visualizar</a>
                            <a href="{{route('produtos.edit', $produto->id)}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
