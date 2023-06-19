@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
            <h1>Listagem de Especialidades</h1>
            <a class="btn btn-primary" href="novo">Novo</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descriçao</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($especialidades as $especialidade)
                    <tr>
                        <td>{{$especialidade->id}}</td>
                        <td>{{$especialidade->nome}}</td>
                        <td>{{$especialidade->descricao}}</td>
                        <td><a class='btn btn-primary' href='/especialidade/editar/{{$especialidade->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/especialidade/excluir/{{$especialidade->id}}'>-</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
