<?php

namespace App\Models;

use App\Models\Upa;
use App\Models\Especialidade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medico extends Model
{
    use HasFactory;
    protected $tabela="medico";
    public $timestamps = false;
    protected $casts = [
        'datanascimento' => 'datetime:Y-m-d',
    ];

    public function especialidade(): BelongsTo
    {
        return $this->belongsTo(Especialidade::class);
    }
    public function upa(): BelongsTo
    {
        return $this->belongsTo(Upa::class);
    }
}
