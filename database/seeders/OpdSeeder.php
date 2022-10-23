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
            [
                'nama' => 'Sekretariat Daerah',
                'deskripsi' => 'Pelayanan Daerah'
            ],
            [
                'nama' => 'Sekretariat DPRD',
                'deskripsi' => 'Pelayanan DPRD'
            ],
            [
                'nama' => 'Inspektorat',
                'deskripsi' => 'Pelayanan Inspektorat'
            ],
            [
                'nama' => 'Badan Kepegawaian',
                'deskripsi' => 'Pelayanan Kepagawaian'
            ],
            [
                'nama' => 'Diklat dan Sumber Daya Manusia',
                'deskripsi' => 'Pelayanan Sumber Daya Manusia'
            ],
            [
                'nama' => 'Badan Keuangan dan Pendapatan Asset Daerah',
                'deskripsi' => 'Pelayanan Keuangan'
            ],
            [
                'nama' => 'Dinas Pekerjaan Umum',
                'deskripsi' => 'Pelayanan Pekerjaan Umum'
            ],
            [
                'nama' => 'Penataan Ruang dan Perumahan Rakyat',
                'deskripsi' => 'Pelayanan Penataan Ruang dan Perumahan Rakyat'
            ],
            [
                'nama' => 'Dinas Ketahanan Pangan dan Pertanian',
                'deskripsi' => 'Pelayanan Ketahanan Pangan dan Pertanian'
            ],
            [
                'nama' => 'Dinas Pariwisata Pemuda dan Olahraga',
                'deskripsi' => 'Pelayanan Pariwisata'
            ],
            [
                'nama' => 'Dinas Lingkungan Hidup',
                'deskripsi' => 'Pelayanan Lingkungan Hidup'
            ],
            [
                'nama' => 'Dinas Pertanahan dan Perhubungan',
                'deskripsi' => 'Pelayanan Pertanahan'
            ],
            [
                'nama' => 'Dinas Penanaman Modal dan PTSP',
                'deskripsi' => 'Pelayanan Penanaman Modal'
            ],
            [
                'nama' => 'Dinas Tenaga Kerja',
                'deskripsi' => 'Pelayanan Tenaga Kerja'
            ],
            [
                'nama' => 'Koperasi dan UMKM',
                'deskripsi' => 'Pelayanan UMKM'
            ],
            [
                'nama' => 'Dinas Perindustrian dan Perdagangan',
                'deskripsi' => 'Pelayanan Perindustrian dan Perdagangan'
            ],
            [
                'nama' => 'Dinas Perikanan',
                'deskripsi' => 'Pelayanan Perikanan'
            ],
            [
                'nama' => 'Dinas Sosial',
                'deskripsi' => 'Pelayanan Sosial'
            ],
            [
                'nama' => 'Permberdayaan Perempuan dan Lingkungan Anak',
                'deskripsi' => 'Pelayanan Perempuan dan Anak'
            ],
            [
                'nama' => 'Dinas Pemberdayaan Masyarakat dan Desa',
                'deskripsi' => 'Pelayanan Masyarakat dan Desa'
            ],
            [
                'nama' => 'Dinas Satuan Polisi Pamong Praja dan Pemadam Kebakaran',
                'deskripsi' => 'Pelayanan SatpolPP dan Pemadam Kebakaran'
            ],
            [
                'nama' => 'Dinas Pengenldian Penduduk ',
                'deskripsi' => 'Pelayanan Pengendalian Penduduk'
            ],
            [
                'nama' => 'Dll',
                'deskripsi' => 'Belum Diketahui'
            ],
        ];
        
        foreach ($opds as $opd) {
            Opd::create($opd);
        }
    }
}
