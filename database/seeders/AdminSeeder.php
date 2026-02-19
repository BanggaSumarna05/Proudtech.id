<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
        ['email' => 'admin@proudtech.id'],
        [
            'name' => 'Admin Proud Tech',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]
        );

        User::firstOrCreate(
        ['email' => 'super@proudtech.id'],
        [
            'name' => 'Super Admin',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]
        );
    }
}
