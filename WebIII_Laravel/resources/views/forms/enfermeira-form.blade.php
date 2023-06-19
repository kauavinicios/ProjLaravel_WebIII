@extends('template')

@section('conteudo')
    <section class="section-int">
        <h1>Cadastro de Enfermeira</h1>
        <form action="{{url('enfermeira/salvar')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$enfermeira->id}}">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" type="text" name="nome" value="{{$enfermeira->nome}}">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input class="form-control" type="text" name="cpf" value="{{$enfermeira->cpf}}">
            </div>
            <div class="mb-3">
                <label for="datanascimento" class="form-label">Data De Nascimento</label>
                <input class="form-control" type="date" name="datanascimento" value="{{$enfermeira->datanascimento}}">
            </div>

            <div class="mb-3">
                <label for="upa_id" class="form-label">Afiliacao</label>
                <select class="form-select" name="upa_id" >
                    @foreach($upas as $upa)
                        <option {{ $upa->id == $enfermeira->upa_id ?'selected': ''}} value="{{$upa->id}} ">{{$upa->nome}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" name="button">Salvar</button>
        </form>
    </section>
@endsection
