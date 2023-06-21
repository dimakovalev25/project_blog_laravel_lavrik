<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RootUser extends Seeder
{
    public function run(): void
    {

        $data = [
            'name' => 'admin',
            'email' => 'a@a',
            'email_verified_at' => now(),
            'password' => Hash::make('admin')
        ];

        User::create($data);

    }
}
