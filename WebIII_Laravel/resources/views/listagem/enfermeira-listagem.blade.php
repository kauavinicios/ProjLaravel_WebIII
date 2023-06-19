@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
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
