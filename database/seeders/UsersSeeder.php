<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Aqui implementamos o código que servirá para a criação de algum user!
         */

        User::create([
            'name' => 'Silvio Silva',
            'email' => 'silviosi794@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
