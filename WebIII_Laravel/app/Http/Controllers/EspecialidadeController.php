<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    function editar($id) {
        $especialidade = Especialidade::find($id);
        return view('forms.especialidade-form', compact('especialidade'));
    }

    function listar() {
        $especialidades = Especialidade::orderBy('nome')->get();
        return view('listagem.especialidade-listagem', compact('especialidades'));
    }

    function novo() {
        $especialidade = new Especialidade();
        $especialidade['id'] = 0;
        return view("forms.especialidade-form", compact('especialidade'));
    }

    function salvar(Request $request) {
        if ($request->input('id') == 0) {
            $especialidade = new Especialidade();
        } else {
            $especialidade = Especialidade::find($request->input('id'));
        }
        $especialidade->nome = $request->input('nome');
        $especialidade->area = $request->input('area');
        $especialidade->descricao = $request->input('descricao');
        $especialidade->save();
        return redirect('especialidade/listar');
    }

    function excluir($id) {
        $model = Especialidade::find($id);
        $model->delete($id);
        return redirect('especialidade/listar');
    }
}
