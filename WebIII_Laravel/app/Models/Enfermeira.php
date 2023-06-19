<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enfermeira extends Model
{
    use HasFactory;
    protected $tabela="enfermeira";
    public $timestamps = false;

    public function upa(): BelongsTo
    {
        return $this->belongsTo(Upa::class);
    }
}
