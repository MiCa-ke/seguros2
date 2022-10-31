<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    use HasFactory;
    protected $fillable=['codigo','nombre','descripcion','tipo_seguro_id'];

    //relación de 1 a mucho inversa
    /*public function cliente(){
        return $this->belongsTo(Cliente::class);
    }*/
    public function tipoSeguro(){
        return $this->belongsTo(TipoSeguro::class);
    }
}
