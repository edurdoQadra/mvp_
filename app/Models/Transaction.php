<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transacciones'; // Nombre de la tabla en la base de datos

    protected $fillable = [            
        'id'=>'',
        'fecha'=>''	,
        'codigo_sede'=>'',
        'codigo_transaccion'=>'',
        'ticket'=>'',
        'venta'	=>'',
        'utilidad'=>''               
    ];
    
   

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at'=>'datetime'
    ];

    protected $primaryKey = 'ID'; // Nombre de la clave primaria
}
