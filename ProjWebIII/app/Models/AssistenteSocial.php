<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssistenteSocial extends Model
{
    use HasFactory;
    protected $tabela="assistentesocial";
    public $timestamps = false;

    public function upa(): BelongsTo
    {
        return $this->belongsTo(Upa::class);
    }
}
