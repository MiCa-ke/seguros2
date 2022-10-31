<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_pa',
        'apellido_ma',
        'telefono',
        'direccion',
        'fecha_nacimiento'
    ];

    public function seguros()
    {
        return $this->hasMany(Seguro::class);
    }
}
