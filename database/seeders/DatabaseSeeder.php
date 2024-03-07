<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $account = Account::create(['name' => 'Acme Corporation']);
      $this->call(FirstUser::class);      
      $this->call(Modules::class);
      $this->call(Rols::class);

    }
}
