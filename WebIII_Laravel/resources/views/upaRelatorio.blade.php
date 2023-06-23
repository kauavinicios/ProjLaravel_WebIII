<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        * {
            font-family: arial, sans-serif;
        }
        h1 {
            font-size: 2rem;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: solid 1px gray;
            padding: 0.5rem;
            font-size: 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Relatório Upa</h1>
<table>
    <thead>
    <tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Localização</th>
    </tr>
    </thead>
    <tbody>
    @foreach($upas as $upa)
        <tr>
            <td>
                @if ($upa->imagem != "")
                    <img style="width: 50px;" src="{{asset('storage/imagens/'.$upa->imagem) }}">
                @endif
            </td>
            <td>{{$upa->nome}}</td>
            <td>{{$upa->localizacao}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
