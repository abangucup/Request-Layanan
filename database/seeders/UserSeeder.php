<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['nama' => 'Salman Mustapa', 'username' => 'admin', 'email' => 'admin@kominfo.bonebol.go.id', 'password' => Hash::make('k0m1nf0*')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
