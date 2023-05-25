<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Upa;

class UpaController extends Controller
{
    function editar($id) {
        $upa = Upa::find($id);
        return view('forms.Upa-form', compact('upa'));
    }

    function listar() {
        $upas = Upa::orderBy('nome')->get();
        return view('listagem.upa-listagem', compact('upas'));
    }

    function novo() {
        $upa = new Upa();
        $upa['id'] = 0;
        return view("forms.upa-form", compact('upa'));
    }

    function salvar(Request $request) {
        if ($request->input('id') == 0) {
            $upa = new Upa();
        } else {
            $upa = Upa::find($request->input('id'));
        }
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $upload = $file->store('public/imagens');
            $upload = explode("/", $upload);
            $tamanho = sizeof($upload);
            if ($upa->imagem != "") {
                Storage::delete("public/imagens/" . $upa->imagem);
            }
            $upa->imagem = $upload[$tamanho - 1];
        }
        $upa->nome = $request->input('nome');
        $upa->localizacao = $request->input('localizacao');
        $upa->save();
        return redirect('upa/listar');
    }

    function excluir($id) {
        $model = Upa::find($id);
        if ($model->imagem != "") {
            Storage::delete("public/imagens/".$model->imagem);
        }
        $model->delete($id);
        return redirect('upa/listar');
    }
}
