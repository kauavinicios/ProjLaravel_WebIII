@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
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
