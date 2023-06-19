<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuxiliarLimpeza extends Model
{
    use HasFactory;
    protected $tabela="auxiliarlimpeza";
    public $timestamps = false;

    public function upa(): BelongsTo
    {
        return $this->belongsTo(Upa::class);
    }
}
