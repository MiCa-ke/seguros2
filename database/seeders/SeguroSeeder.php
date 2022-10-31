<?php

namespace Database\Seeders;

use App\Models\Seguro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seguros = [
            [
                'descripcion' => 'Automotor Coorporativo',
                'tipo_seguro_id'=>1
            ],
            [
                'descripcion' => 'Transporte',
                'tipo_seguro_id'=>1
            ],
            [
                'descripcion' => 'Auto x Km',
                'tipo_seguro_id'=>2
            ],
            [
                'descripcion' => 'Automotor Vital',
                'tipo_seguro_id'=>2
            ]
        ];
        foreach ($seguros as $seguro) {
            Seguro::create($seguro);
        }
    }
}
