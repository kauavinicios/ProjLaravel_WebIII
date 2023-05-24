<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'datanascimento' => 'required',
            'crm' => 'required',
            'especialidade_id' => 'required|exists:especialidades,id',
            'upa_id' => 'required|exists:upas,id'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'datanascimento.required' => 'Data de Nascimento é obrigatória',
            'crm.required' => 'CRM é obrigatória',
            'especialidade_id.required' => 'Especialidade é obrigatória',
            'upa_id.required' => 'Afiliação é obrigatório',
            'especialidade_id.exists' => 'Especialidade não encontrado',
            'upa_id.exists' => 'Afiliação não encontrada',
        ];
    }
}
