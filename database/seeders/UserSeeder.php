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
            'id'=>1,
            'name'=>'demo',
            'email'=>'demo@netcode.cl',
            'password'=>bcrypt('passw0rd')
        ]);
        User::create([
            'id'=>2,
            'name'=>'demo2',
            'email'=>'demo2@netcode.cl',
            'password'=>bcrypt('passw0rd')
        ]);
    }
}
