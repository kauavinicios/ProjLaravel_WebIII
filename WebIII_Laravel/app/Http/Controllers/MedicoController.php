<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Upa;
use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\MedicoRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class MedicoController extends Controller
{
    function editar($id) {
        $area = 1;
        $medico = Medico::find($id);
        $upas = Upa::orderBy('nome')->get();
        $especialidades = Especialidade::orderBy('nome')->get();
        return view('forms.medico-form', compact('medico', 'upas', 'especialidades', 'area'));
    }

    function listar() {
        $medicos = Medico::orderBy('nome')->get();
        return view('listagem.medico-listagem', compact('medicos'));
    }

    function novo() {
        $area = 1;
        $medico = new Medico();
        $medico['id'] = 0;
        $especialidades = Especialidade::orderBy('id')->get();
        $upas = Upa::orderBy('nome')->get();
        return view('forms.medico-form', compact('medico','upas','especialidades', 'area'));
    }

    function salvar(MedicoRequest $request) {

        if ($request->input('id') == 0) {
            $medico = new Medico();
        } else {
            $medico = Medico::find($request->input('id'));
        }
        $medico->nome = $request->input('nome');
        $medico->datanascimento = $request->input('datanascimento');
        $medico->crm = $request->input('crm');
        $medico->especialidade_id = $request->input('especialidade_id');
        $medico->upa_id = $request->input('upa_id');
        $medico->save();
        return redirect('medico/listar');
    }

    function excluir($id) {
        $model = Especialidade::find($id);
        $model->delete($id);
        return redirect('medico/listar');
    }

    function relatorio() {
        $medicos = Medico::orderBy('nome')->get();
        $pdf = Pdf::loadView('medicoRelatorio', compact('medicos'));
        return $pdf->download('relatorio-medico.pdf');
    }
}
