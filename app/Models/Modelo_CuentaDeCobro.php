<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo_CuentaDeCobro extends Model
{
    protected $table = 'cuentascobro';
    protected $primaryKey = 'idCuentaCobro';
    public $incrementing = true;
    protected $tipoLlave = 'int';

    protected $fillable = [
        'numeroCuentaCobro',
        'fechaPresentacion',
        'valorCobrado',
        'estado',
        'contratoAsociado',
        'contratistaAsociado'
    ];

    protected $casts = [
        'fechaPresentacion' => 'datetime',
        'valorCobrado' => 'decimal:2',
    ];
}
