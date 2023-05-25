@extends('template')

@section('conteudo')
<h1>Cadastro de Assistente Social</h1>
<form action="{{url('assistenteSocial/salvar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$assistenteSocial->id}}">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" value="{{$assistenteSocial->nome}}">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input class="form-control" type="text" name="cpf" value="{{$assistenteSocial->cpf}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input class="form-control" type="email" name="email" value="{{$assistenteSocial->email}}">
    </div>
    <div class="mb-3">
        <label for="especialidade_id" class="form-label">Especialidade</label>
        <select class="form-select" name="especialidade_id" >
            @foreach($especialidades as $especialidade)
                @if($especialidade->area == $area)
                    <option {{ $especialidade->id == $assistenteSocial->especialidade_id ?'selected': ''}} value="{{$especialidade->id}} ">{{$especialidade->nome}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="upa_id" class="form-label">Afiliação</label>
        <select class="form-select" name="upa_id" >
            @foreach($upas as $upa)
            <option {{ $upa->id == $assistenteSocial->upa_id ?'selected': ''}} value="{{$upa->id}} ">{{$upa->nome}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" name="button">Salvar</button>
</form>
@endsection
