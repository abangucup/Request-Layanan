<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            ['nama' => 'Salman Mustapa', 'username' => 'admin', 'email' => 'admin@kominfo.bonebol.go.id', 'password' => Hash::make('k0m1nf0*')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
