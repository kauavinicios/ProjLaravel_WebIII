@extends('template')

@section('conteudo')
    <h1>Cadastro de Especialidade</h1>
    <form action="{{url('especialidade/salvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$especialidade->id}}">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{$especialidade->nome}}">
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">area</label>
            <input class="form-control" type="number" name="area" value="{{$especialidade->area}}" max="2" min="1">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input class="form-control" type="text" name="descricao" value="{{$especialidade->descricao}}">
        </div>

        <button type="submit" name="button">Salvar</button>
    </form>
@endsection
