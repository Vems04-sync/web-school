<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    public function run(): void
    {
        $extracurriculars = [
            [
                'name' => 'Organisasi Siswa Intra Sekolah (OSIS)',
                'description' => 'Wadah utama organisasi siswa SMA AL-ISLAMI untuk melatih kepemimpinan, manajerial kegiatan sekolah, kedisiplinan, dan kerja sama tim.',
                'image' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Gerakan Pramuka',
                'description' => 'Kegiatan kepramukaan pembina karakter berwawasan kebangsaan, kemandirian, kedisiplinan, keterampilan alam terbuka, serta kepedulian sosial.',
                'image' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Futsal',
                'description' => 'Olahraga ketangkasan dan fisik favorit siswa yang melatih kerja sama tim, kekompakan, stamina, serta meraih prestasi di berbagai kompetisi.',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Menjahit',
                'description' => 'Pelatihan keterampilan vokasi tata busana dasar, pembuatan pola, mengoperasikan mesin jahit, dan teknik menjahit kreasi pakaian.',
                'image' => 'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Tata Boga',
                'description' => 'Program keterampilan kuliner memasak, mengolah aneka resep nusantara dan modern, pengolahan makanan higienis, serta dasar wirausaha kuliner.',
                'image' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Tata Busana',
                'description' => 'Pendalaman merancang busana, desain fashion Islami, pemilihan kain, pewarnaan tekstil, dan pembuatan produk kreatif berkelas.',
                'image' => 'https://images.unsplash.com/photo-1537832816519-689ad163238b?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Pangkas Rambut',
                'description' => 'Pelatihan keterampilan pangkas rambut pria dan gaya rambut modern, penggunaan perlengkapan barbershop, serta kesiapan wirausaha mandiri.',
                'image' => 'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        foreach ($extracurriculars as $data) {
            Extracurricular::updateOrCreate(
                ['name' => $data['name']],
                $data
            );
        }
    }
}
