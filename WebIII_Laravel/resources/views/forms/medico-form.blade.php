@extends('template')

@section('conteudo')
    <section class="section-int">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Cadastro de Medico</h1>
        <form action="{{url('medico/salvar')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$medico->id}}">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control  @error('nome') is-invalid @enderror" type="text" name="nome" value="{{old('titulo', $medico->nome)}}">
                @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="datanascimento" class="form-label">Data De Nascimento</label>
                <?php var_dump($medico->datanascimento); ?>
                <input class="form-control @error('datanascimento') is-invalid @enderror" type="date" name="datanascimento" value="$medico->datanascimento}}">
                @error('datanascimento')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="crm" class="form-label">CRM</label>
                <input class="form-control @error('crm') is-invalid @enderror" type="text" name="crm" maxlength="14" value="{{old('crm', $medico->crm)}}">
                @error('crm')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="especialidade_id" class="form-label">Especialidade</label>
                <select class="form-select @error('especialidade_id') is-invalid @enderror" name="especialidade_id" >
                    @foreach($especialidades as $especialidade)
                        @if($especialidade->area == $area)
                         <option {{ $especialidade->id == $medico->especialidade_id ?'selected': ''}} value="{{$especialidade->id}}">{{$especialidade->nome}}</option>
                        @endif
                    @endforeach
                </select>
                @error('especialidade_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="upa_id" class="form-label">Afiliacao</label>
                <select class="form-select @error('upa_id') is-invalid @enderror" name="upa_id" >
                    @foreach($upas as $upa)
                        <option {{ $upa->id == $medico->upa_id ?'selected': ''}} value="{{$upa->id}} ">{{$upa->nome}}</option>
                    @endforeach
                </select>
                @error('upa_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" name="button">Salvar</button>
        </form>
    </section>
@endsection
