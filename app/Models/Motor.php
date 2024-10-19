<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = ['empresa_id','hash','isFake'];

    function dadosLeitura() {
        return $this->hasMany(DadosLeitura::class);
    }

    function empresa() {
        return $this->belongsTo(Empresa::class);
    }
}
