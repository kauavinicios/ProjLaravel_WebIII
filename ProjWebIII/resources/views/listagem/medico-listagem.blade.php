@extends('template')

@section('conteudo')
    <style>
        .medicos {
            background: url(https://img.freepik.com/vetores-premium/banner-de-fundo-de-tecnologia-azul-moderna-com-quadrado-linha-e-meio-tom_181182-19741.jpg?w=1800);
            padding: 30px;
        }

        .medicos-int{
            background-color: #ffffff88;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <section class="medicos">
        <div class="medicos-int">
            <h1>Listagem de Medicos</h1>
            <a class='btn btn-primary' href="novo">Novo</a>
            <table class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data De Nascimento</th>
                    <th>CRM</th>
                    <th>Especialidade</th>
                    <th>Afiliacao</th>
                    <th></th>
                    <th></th>
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
                    <td><a class='btn btn-primary' href='/medico/editar/{{$medico->id}}'>+</a></td>
                    <td><a class='btn btn-danger' href='/medico/excluir/{{$medico->id}}'>-</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
