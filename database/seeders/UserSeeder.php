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
        //

        User::create([
            'name' => 'Frank Murga Diaz',
            'email' => 'fmurgad@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
