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
                'descripcion' => 'Empresarial',
            ],
            [
                'descripcion' => 'Personal',
            ]
        ];
        foreach ($ts as $t) {
            TipoSeguro::create($t);
        }
    }
}
