@extends('template')

@section('conteudo')
    <style>
        .enfer {
            background: url(https://i.pinimg.com/originals/fb/47/62/fb4762604e8db09ae471fd74fbde5630.jpg);
            padding: 30px;
        }
        .enfer-int{
            background-color: #ffffff88;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <section class="enfer">
        <div class="enfer-int">
            <h1>Listagem de Enfermeiras</h1>
            <a class="btn btn-primary" href="novo">Novo</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data De Nascimento</th>
                    <th>Afiliação</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($enfermeiras as $enfermeira)
                    <tr>
                        <td>{{$enfermeira->nome}}</td>
                        <td>{{$enfermeira->cpf}}</td>
                        <td>{{$enfermeira->datanascimento}}</td>
                        <td>{{$enfermeira->upa->nome}}</td>
                        <td><a class='btn btn-primary' href='/enfermeira/editar/{{$enfermeira->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/enfermeira/excluir/{{$enfermeira->id}}'>-</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
