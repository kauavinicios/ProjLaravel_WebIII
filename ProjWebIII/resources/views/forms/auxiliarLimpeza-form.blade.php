@extends('template')

@section('conteudo')
    <h1>Cadastro de Assistente Social</h1>
    <form action="{{url('auxiliarLimpeza/salvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$auxiliarLimpeza->id}}">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{$auxiliarLimpeza->nome}}">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input class="form-control" type="text" name="cpf" value="{{$auxiliarLimpeza->cpf}}">
        </div>
        <div class="mb-3">
            <label for="upa_id" class="form-label">Afiliação</label>
            <select class="form-select" name="upa_id" >
                @foreach($upas as $upa)
                    <option {{ $upa->id == $auxiliarLimpeza->upa_id ?'selected': ''}} value="{{$upa->id}} ">{{$upa->nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="button">Salvar</button>
    </form>
@endsection
