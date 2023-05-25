<?php

namespace App\Http\Controllers;

use App\Models\AssistenteSocial;
use App\Models\Especialidade;
use App\Models\Upa;
use Illuminate\Http\Request;

class AssistenteSocialController extends Controller
{
    function editar($id) {
        $area = 2;
        $assistenteSocial = AssistenteSocial::find($id);
        $upas = Upa::orderBy("nome")->get();
        $especialidades = Especialidade::orderBy("nome")->get();
        return view('forms.assistenteSocial-form', compact('assistenteSocial', 'upas', 'especialidades', 'area'));
    }

    function listar() {
        $assistenteSociais = AssistenteSocial::orderBy('nome')->get();
        return view('listagem.assistenteSocial-listagem', compact('assistenteSociais'));
    }

    function novo() {
        $area = 2;
        $assistenteSocial = new AssistenteSocial();
        $assistenteSocial['id'] = 0;
        $upas = Upa::orderBy("nome")->get();
        $especialidades = Especialidade::orderBy("nome")->get();
        return view("forms.assistenteSocial-form", compact('assistenteSocial', 'upas', 'especialidades', 'area'));
    }

    function salvar(Request $request) {
        if ($request->input('id') == 0) {
            $assistenteSocial = new AssistenteSocial();
        } else {
            $assistenteSocial = AssistenteSocial::find($request->input('id'));
        }
        $assistenteSocial->nome = $request->input('nome');
        $assistenteSocial->cpf = $request->input('cpf');
        $assistenteSocial->email = $request->input('email');
        $assistenteSocial->especialidade_id = $request->input('especialidade_id');
        $assistenteSocial->upa_id = $request->input('upa_id');
        $assistenteSocial->save();
        return redirect('assistenteSocial/listar');
    }

    function excluir($id) {
        $model = AssistenteSocial::find($id);
        $model->delete($id);
        return redirect('assistenteSocial/listar');
    }
}
