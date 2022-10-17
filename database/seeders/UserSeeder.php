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
            [
                'nama' => 'Hendra Lahay',
                'username' => 'andi',
                'email' => 'andi@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'Kepala Bidang Informatika',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Hendra Gobel',
                'username' => 'hendra',
                'email' => 'hendra@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'Kepala Bagian Networking',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Agung',
                'username' => 'agung',
                'email' => 'agung@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'Kepala Bagian Programming',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Ramadan Kaharu',
                'username' => 'dani',
                'email' => 'dani@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'TIM EXPERT',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Ihsan Fathurahman Jamil',
                'username' => 'ihsan',
                'email' => 'ihsan@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'TIM EXPERT',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Salman Mustapa',
                'username' => 'mances',
                'email' => 'mances@kominfo.bonebol.go.id',
                'password' => Hash::make('k0m1nf0*'),
                'role' => 'admin',
                'jabatan' => 'TIM EXPERT',
                'no_hp' => '08xxxxxxxxxxxxxx'
            ],
            [
                'nama' => 'Client',
                'username' => 'client',
                'email' => 'client@kominfo.bonebol.go.id',
                'password' => Hash::make('password'),
                'role' => 'opd',
                'no_hp' => '08xxxxxxx'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
