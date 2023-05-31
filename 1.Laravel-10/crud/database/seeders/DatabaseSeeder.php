<?php

namespace Database\Seeders;

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
        /* Cria 10 usuários fake
        Comando: php artisan migrate --seed */
        \App\Models\User::factory(10)->create();
    }
}
