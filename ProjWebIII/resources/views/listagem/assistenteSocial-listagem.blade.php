@extends('template')

@section('conteudo')
    <style>
        .assisSocial {
            background: url(https://img.freepik.com/vetores-premium/banner-de-fundo-de-tecnologia-azul-moderna-com-quadrado-linha-e-meio-tom_181182-19741.jpg?w=1800);
            padding: 30px;
        }

        .assisSocial-int{
            background-color: #ffffff88;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <section class="assisSocial">
        <div class="assisSocial-int">
            <h1>Listagem de Assistentes Socias</h1>
            <a class='btn btn-primary' href="novo">Novo</a>
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
                @foreach($assistenteSocials as $assistenteSocial)
                    <tr>
                        <td>{{$assistenteSocial->id}}</td>
                        <td>{{$assistenteSocial->nome}}</td>
                        <td>{{$assistenteSocial->cpf}}</td>
                        <td>{{$assistenteSocial->email}}</td>
                        <td>{{$assistenteSocial->especialidade->nome}}</td>
                        <td>{{$assistenteSocial->upa->nome}}</td>
                        <td><a class='btn btn-primary' href='/assistenteSocial/editar/{{$assistenteSocial->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/assistenteSocial/excluir/{{$assistenteSocial->id}}'>-</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
