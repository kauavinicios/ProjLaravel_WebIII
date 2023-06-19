<?php

namespace App\Http\Controllers;

use App\Models\Enfermeira;
use App\Models\Upa;
use Illuminate\Http\Request;

class EnfermeiraController extends Controller
{
    function editar($id) {
        $enfermeira = Enfermeira::find($id);
        $upas = Upa::orderBy("nome")->get();
        return view('forms.enfermeira-form', compact('enfermeira', 'upas'));
    }

    function listar() {
        $enfermeiras = Enfermeira::orderBy('nome')->get();
        return view('listagem.enfermeira-listagem', compact('enfermeiras'));
    }

    function novo() {
        $enfermeira = new Enfermeira();
        $enfermeira['id'] = 0;
        $upas = Upa::orderBy("nome")->get();
        return view("forms.enfermeira-form", compact('enfermeira', 'upas'));
    }

    function salvar(Request $request) {
        if ($request->input('id') == 0) {
            $enfermeira = new Enfermeira();
        } else {
            $enfermeira = Enfermeira::find($request->input('id'));
        }
        $enfermeira->nome = $request->input('nome');
        $enfermeira->cpf = $request->input('cpf');
        $enfermeira->datanascimento = $request->input('datanascimento');
        $enfermeira->upa_id = $request->input('upa_id');
        $enfermeira->save();
        return redirect('enfermeira/listar');
    }

    function excluir($id) {
        $model = Enfermeira::find($id);
        $model->delete($id);
        return redirect('enfermeira/listar');
    }
}
