<?php

namespace App\Http\Controllers;

use App\Models\AuxiliarLimpeza;
use App\Models\Upa;
use Illuminate\Http\Request;

class AuxiliarLimpezaController extends Controller
{
    function editar($id) {
        $auxiliarLimpeza = AuxiliarLimpeza::find($id);
        $upas = Upa::orderBy("nome")->get();
        return view('forms.auxiliarLimpeza-form', compact('auxiliarLimpeza', 'upas'));
    }

    function listar() {
        $auxiliarLimpezas = AuxiliarLimpeza::orderBy('nome')->get();
        return view('listagem.auxiliarLimpeza-listagem', compact('auxiliarLimpezas'));
    }

    function novo() {
        $auxiliarLimpeza = new AuxiliarLimpeza();
        $auxiliarLimpeza['id'] = 0;
        $upas = Upa::orderBy("nome")->get();
        $especialidades = AuxiliarLimpeza::orderBy("nome")->get();
        return view("forms.auxiliarLimpeza-form", compact('auxiliarLimpeza', 'upas'));
    }

    function salvar(Request $request) {
        if ($request->input('id') == 0) {
            $auxiliarLimpeza = new AuxiliarLimpeza();
        } else {
            $auxiliarLimpeza = AuxiliarLimpeza::find($request->input('id'));
        }
        $auxiliarLimpeza->nome = $request->input('nome');
        $auxiliarLimpeza->cpf = $request->input('cpf');
        $auxiliarLimpeza->upa_id = $request->input('upa_id');
        $auxiliarLimpeza->save();
        return redirect('auxiliarLimpeza/listar');
    }

    function excluir($id) {
        $model = AuxiliarLimpeza::find($id);
        $model->delete($id);
        return redirect('auxiliarLimpeza/listar');
    }
}
