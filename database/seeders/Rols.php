<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\RolModulePermission;
use Illuminate\Database\Seeder;

class Rols extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Rol::create(['name'=>'Super Admin']);
        Rol::create(['name'=>'Administrador']);
        Rol::create(['name'=>'Operador']);

        RolModulePermission::insert([
                                        ['rol_id' => 1 , 'module_id'=>1 , 'view'=>1, 'create'=>1 , 'edit'=>1, 'delete'=>1 ],
                                        ['rol_id' => 1 , 'module_id'=>2 , 'view'=>1, 'create'=>1 , 'edit'=>1, 'delete'=>1 ],
                                        ['rol_id' => 1 , 'module_id'=>3 , 'view'=>1, 'create'=>1 , 'edit'=>1, 'delete'=>1 ],
                                        ['rol_id' => 1 , 'module_id'=>4 , 'view'=>1, 'create'=>1 , 'edit'=>1, 'delete'=>1 ],
                                    ]);

       

    }
}
