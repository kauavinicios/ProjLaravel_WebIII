@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
            <h1>Listagem de Auxiliares De Limpeza</h1>
            @if (Auth::check())
                <a class='btn btn-primary' href="novo">Novo</a>
            @endif
            <table class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Afiliação</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($auxiliarLimpezas as $auxiliarLimpeza)
                    <tr>
                        <td>{{$auxiliarLimpeza->id}}</td>
                        <td>{{$auxiliarLimpeza->nome}}</td>
                        <td>{{$auxiliarLimpeza->cpf}}</td>
                        <td>{{$auxiliarLimpeza->upa->nome}}</td>
                        @if (Auth::check())
                            <td><a class='btn btn-primary' href='/auxiliarLimpeza/editar/{{$auxiliarLimpeza->id}}'>+</a></td>
                            <td><a class='btn btn-danger' href='/auxiliarLimpeza/excluir/{{$auxiliarLimpeza->id}}'>-</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
