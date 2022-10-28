<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Micaela Roca Garnica',
        //     'email' => 'micaela@correo.com',
        //     'password' => bcrypt('12345678'),
        //     'remember_token' => bcrypt('12345678')    
        // ])->assignRole('dev');

        // User::factory(9)->create();
    }
}
