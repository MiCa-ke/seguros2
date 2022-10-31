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
                'codigo'=>'SPN-1',
                'nombre'=>'Automotor Coorporativo',
                'descripcion' => 'Todo lo que cubre el seguro Automotor Coorporativo',
                'tipo_seguro_id'=>1
            ],
            [
                
                'codigo'=>'SPN-2',
                'nombre' => 'Transporte',
                'descripcion' => 'Todo lo que cubre el seguro Transporte',
                'tipo_seguro_id'=>1
            ],
            [
                
                'codigo'=>'SPN-3',
                'nombre' => 'Auto x Km',
                'descripcion' => 'Todo lo que cubre el seguro Auto x Km',
                'tipo_seguro_id'=>2
            ],
            [
                
                'codigo'=>'SPN-4',
                'nombre' => 'Automotor Vital',
                'descripcion' => 'Todo lo que cubre el seguro Automotor Vital',
                'tipo_seguro_id'=>2
            ]
        ];
        foreach ($seguros as $seguro) {
            Seguro::create($seguro);
        }
    }
}
