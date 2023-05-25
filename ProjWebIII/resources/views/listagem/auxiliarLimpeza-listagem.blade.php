@extends('template')

@section('conteudo')
    <style>
        .auxlimpesa {
            background: url(https://img.freepik.com/vetores-premium/banner-de-fundo-de-tecnologia-azul-moderna-com-quadrado-linha-e-meio-tom_181182-19741.jpg?w=1800);
            padding: 30px;
        }

        .auxlimpesa-int{
            background-color: #ffffff88;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <section class="auxlimpesa">
        <div class="auxlimpesa-int">
            <h1>Listagem de Auxiliares De Limpeza</h1>
            <a class='btn btn-primary' href="novo">Novo</a>
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
                        <td><a class='btn btn-primary' href='/auxiliarLimpeza/editar/{{$auxiliarLimpeza->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/auxiliarLimpeza/excluir/{{$auxiliarLimpeza->id}}'>-</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
