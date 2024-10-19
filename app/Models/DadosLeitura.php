<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosLeitura extends Model
{
    use HasFactory;

    protected $fillable = [
        'corrente',
        'dataLeitura',
        'horaLeitura',
        'motor_id'
    ];

    function motor() {
        $this->belongsTo(Motor::class);
    }
}
