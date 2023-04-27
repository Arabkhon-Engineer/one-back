<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            "name"=> 'manager',
            'role_id'=> 1,
            'email'=> 'manage@tech.com',
            'password'=> Hash::make(value: 'secret')
        ]);
    }
}
