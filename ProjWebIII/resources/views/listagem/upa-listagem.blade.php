@extends('template')

@section('conteudo')
    <section>
        <div class="section-int">
            <h1>Listagem de upas</h1>
            <a class="btn btn-primary" href="novo">Novo</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Localização</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($upas as $upa)
                      <tr>
                          <td>
                              @if ($upa->imagem != "")
                                  <img style="width: 50px;" src="{{asset('storage/imagens/'.$upa->imagem) }}">
                              @endif
                          </td>
                        <td>{{$upa->nome}}</td>
                        <td>{{$upa->localizacao}}</td>
                        <td><a class='btn btn-primary' href='/upa/editar/{{$upa->id}}'>+</a></td>
                        <td><a class='btn btn-danger' href='/upa/excluir/{{$upa->id}}'>-</a></td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
