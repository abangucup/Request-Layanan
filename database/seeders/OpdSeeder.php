<?php

namespace Database\Seeders;

use App\Models\Opd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opds = [
            ['nama' => 'Komunikasi Dan Informasika', 'bidang' => 'Informatika', 'deskripsi' => 'Bertugas Melayani masyarakat maupun OPD dalam hal INTERNET, CCTV, HOSTING'],
            ['nama' => 'Komunikasi Dan Informasika', 'bidang' => 'Komunikasi', 'deskripsi' => 'Bertugas dalam meliput serta penyampian berita atau informasi kepada masyarakat']
        ];

        foreach ($opds as $opd) {
            Opd::create($opd);
        }
    }
}
