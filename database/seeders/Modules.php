<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class Modules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Module::insert([
            [
                'name' => 'Usuarios',
                'slug' => 'users',
                'icon' => 'user',
                'order' =>'1',
                'created_at' => now(),
                'enabled' => true,
                'master' => false
            ],
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'icon' => 'dashboard-square',
                'order' =>'9999',
                'created_at' => now(),
                'enabled' => true,
                'master' => false
            ],
            [
                'name' => 'Módulo',
                'slug' => 'modules',
                'icon' => 'modules',
                'order' =>'2',
                'created_at' => now(),
                'enabled' => true,
                'master' => false
            ],
            [
                'name' => 'Configuración',
                'slug' => 'setting',
                'icon' => 'setting',
                'order' =>'3',
                'created_at' => now(),
                'enabled' => true,
                'master' => false
            ]
        ]);
    }
}
