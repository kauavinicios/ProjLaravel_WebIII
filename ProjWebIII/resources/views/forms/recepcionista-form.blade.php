@extends('template')

@section('conteudo')
    <h1>Cadastro de Recepcionista</h1>
    <form action="{{url('recepcionista/salvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$recepcionista->id}}">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{$recepcionista->nome}}">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input class="form-control" type="text" name="cpf" value="{{$recepcionista->cpf}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input class="form-control" type="text" name="email" value="{{$recepcionista->email}}">
        </div>

        <div class="mb-3">
            <label for="upa_id" class="form-label">Afiliação</label>
            <select class="form-select" name="upa_id" >
                @foreach($upas as $upa)
                    <option {{ $upa->id == $recepcionista->upa_id ?'selected': ''}} value="{{$upa->id}} ">{{$upa->nome}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" name="button">Salvar</button>
    </form>
@endsection
