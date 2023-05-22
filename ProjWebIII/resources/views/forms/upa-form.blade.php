@extends('template')

@section('conteudo')
    <h1>Cadastro de Upa</h1>
    <form action="{{url('upa/salvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$upa->id}}">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{$upa->nome}}">
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização</label>
            <input class="form-control" type="text" name="localizacao" value="{{$upa->localizacao}}">
        </div>

        <button type="submit" name="button">Salvar</button>
    </form>
@endsection
