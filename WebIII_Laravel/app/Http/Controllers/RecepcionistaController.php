<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use App\Models\Upa;
use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    function editar($id) {
        $recepcionista = Recepcionista::find($id);
        $upas = Upa::orderBy('nome')->get();
        return view('forms.recepcionista-form', compact('recepcionista', 'upas'));
    }

    function listar() {
        $recepcionistas = Recepcionista::orderBy('nome')->get();
        return view('listagem.recepcionista-listagem', compact('recepcionistas'));
    }

    function novo() {
        $recepcionista = new Recepcionista();
        $recepcionista['id'] = 0;
        $upas = Upa::orderBy('nome')->get();
        return view('forms.recepcionista-form', compact('recepcionista','upas'));
    }

    function salvar(Request $request) {

        if ($request->input('id') == 0) {
            $recepcionista = new Recepcionista();
        } else {
            $recepcionista = Recepcionista::find($request->input('id'));
        }
        $recepcionista->nome = $request->input('nome');
        $recepcionista->cpf = $request->input('cpf');
        $recepcionista->email = $request->input('email');
        $recepcionista->upa_id = $request->input('upa_id');
        $recepcionista->save();
        return redirect('recepcionista/listar');
    }

    function excluir($id) {
        $model = Recepcionista::find($id);
        $model->delete($id);
        return redirect('recepcionista/listar');
    }
}
