<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Login::create([
            'username' => 'admin',
            'password' => 'admin',
        ]);
    }
}
