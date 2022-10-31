<?php

namespace Database\Seeders;

use App\Models\TipoSeguro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ts = [
            [
                'nombre'=>'Empresarial',
                'descripcion' => 'Tipo de seguro empresarial',
            ],
            [
                'nombre'=>'Personal',
                'descripcion' => 'Tipo de seguro personal',
            ]
        ];
        foreach ($ts as $t) {
            TipoSeguro::create($t);
        }
    }
}
