<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSeguro extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion'];

    //relación de 1 a muchos
    public function seguros(){
        return $this->hasMany(Seguro::class);
    }
}
