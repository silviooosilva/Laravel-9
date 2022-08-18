<?php

/**
 * Seeders serve para implementação de usuários sem usarmos as migrations!
 * Basta rodar o comando php artisan make:seeder UsersSeeder
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            UsersSeeder::class
        ]);
    }

    /**
     *
     * Agora basta rodar o nosso seed!
     *
     * php artisan db:seed
     *
     */
}
