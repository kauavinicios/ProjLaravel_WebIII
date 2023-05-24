@extends('template')

@section('conteudo')
    <style>
        .recp {
            background: url(https://i.pinimg.com/originals/fb/47/62/fb4762604e8db09ae471fd74fbde5630.jpg);
            padding: 30px;
        }
        .recp-int{
            background-color: #ffffff88;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <section class="recp">
        <div class="recp-int">
            <h1>Listagem de Recepcionista</h1>
            <a class="btn btn-primary" href="novo">Novo</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Afiliação</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($recepcionistas as $recepcionista)
                    <tr>
                        <td>{{$recepcionista->nome}}</td>
                        <td>{{$recepcionista->cpf}}</td>
                        <td>{{$recepcionista->email}}</td>
                        <td>{{$recepcionista->upa->nome}}</td>
                        <td><a class='btn btn-primary' href='/recepcionista/editar/{{$recepcionista->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/recepcionista/excluir/{{$recepcionista->id}}'>-</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
