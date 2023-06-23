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
            font-size: 1.5rem;
            text-align: center;
        }
        table {
            width: 10%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: solid 1px gray;
            padding: 0.5rem;
            font-size: 0.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Relatório Medicos</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data De Nascimento</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Afiliacao</th>
    </tr>
    </thead>
    <tbody>
    @foreach($medicos as $medico)
        <tr>
            <td>{{$medico->id}}</td>
            <td>{{$medico->nome}}</td>
            <td>{{$medico->datanascimento->format('d/m/y')}}</td>
            <td>{{$medico->crm}}</td>
            <td>{{$medico->especialidade->nome}}</td>
            <td>{{$medico->upa->nome}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
