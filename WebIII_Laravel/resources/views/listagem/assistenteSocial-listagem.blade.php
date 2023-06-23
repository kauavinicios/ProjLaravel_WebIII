@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
            <h1>Listagem de Assistentes Socias</h1>
            @if (Auth::check())
                <a class='btn btn-primary' href="novo">Novo</a>
            @endif
            <table class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Especialidade</th>
                    <th>Afiliação</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($assistenteSociais as $assistenteSocial)
                    <tr>
                        <td>{{$assistenteSocial->id}}</td>
                        <td>{{$assistenteSocial->nome}}</td>
                        <td>{{$assistenteSocial->cpf}}</td>
                        <td>{{$assistenteSocial->email}}</td>
                        <td>{{$assistenteSocial->especialidade->nome}}</td>
                        <td>{{$assistenteSocial->upa->nome}}</td>
                        @if (Auth::check())
                            <td><a class='btn btn-primary' href='/assistenteSocial/editar/{{$assistenteSocial->id}}'>+</a></td>
                            <td><a class='btn btn-danger' href='/assistenteSocial/excluir/{{$assistenteSocial->id}}'>-</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
