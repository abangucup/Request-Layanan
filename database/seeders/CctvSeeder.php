<?php

namespace Database\Seeders;

use App\Models\Cctv;
use Illuminate\Database\Seeder;

class CctvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cctvs = [
            [
                'lokasi' => 'Bidang Komunikasi',
                'ip' => '103.153.136.74',
                'port' => '8083',
                'nama' => 'Camera 01',
                'url' => 'https://rtsp.me/embed/Bea6ezFk/',
                'username' => 'admin',
                'password' => 'Admin123',
                'status' => 'active'
            ],
            [
                'lokasi' => 'Capil',
                'ip' => '103.153.136.74',
                'port' => '8082',
                'nama' => 'Camera 01',
                'url' => 'https://rtsp.me/embed/D8sbGS9k/',
                'username' => 'admin',
                'password' => 'Admin123',
                'status' => 'active'
            ],
            [
                'lokasi' => 'Bidang Kominfo',
                'ip' => '103.153.136.74',
                'port' => '8081',
                'nama' => 'Camera 01',
                'url' => 'https://rtsp.me/embed/QzFdkBa5/',
                'username' => 'admin',
                'password' => 'Admin123',
                'status' => 'active'
            ],
            [
                'lokasi' => 'Bidang ULP',
                'ip' => '103.153.136.74',
                'port' => '8084',
                'nama' => 'Camera 01',
                'url' => 'https://rtsp.me/embed/ByZR5Hab/',
                'username' => 'admin',
                'password' => 'Admin123',
                'status' => 'active'
            ],
        ];

        foreach ($cctvs as $cctv) {
            Cctv::create($cctv);
        }
    }
}
