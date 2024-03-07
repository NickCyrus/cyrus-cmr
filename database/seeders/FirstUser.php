<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FirstUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'first_name' => 'Nick',
            'last_name' => 'Cyrus',
            'email' => 'nick@example.com',
            'rol_id' => 1,
            'password' => 'secret',
            'owner' => true,
        ]);
    }
}
