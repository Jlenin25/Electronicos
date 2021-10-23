<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mauro',
            'lastname'=> 'Benancio',
            'docu'=> '12345678',
            'direccion' => 'Los Olivos, Rosales de pro',
            'estado'=> 'activo',
            'email' => 'mauro@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        // User::factory(10)->create();
    }
}
