<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run(): void
    {
        $facilities = [
            [
                'name' => 'Ruang Kelas Interaktif',
                'category' => 'Ruang Teori',
                'description' => 'Ruang kelas nyaman yang dilengkapi proyektor LCD interaktif dan papan tulis modern untuk mendukung proses KBM yang efektif.',
                'image' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Laboratorium Komputer & Multimedia',
                'category' => 'Laboratorium',
                'description' => 'Laboratorium komputer dengan spesifikasi tinggi, jaringan internet cepat, dan perangkat multimedia untuk pembelajaran TI dan ujian berbasis komputer.',
                'image' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Dapur Praktik Tata Boga',
                'category' => 'Vokasi Praktik',
                'description' => 'Dapur standar kuliner yang dilengkapi peralatan memasak lengkap untuk praktik pengolahan makanan, bakery, dan wirausaha kuliner.',
                'image' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Studio Menjahit & Tata Busana',
                'category' => 'Vokasi Praktik',
                'description' => 'Studio tata busana yang dilengkapi mesin jahit listrik, manekin, dan peralatan pembuat pola untuk melatih keterampilan pembuatan busana.',
                'image' => 'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Barbershop & Grooming Center',
                'category' => 'Vokasi Praktik',
                'description' => 'Ruang praktik pangkas rambut dengan kursi barbershop, cermin profesional, dan peralatan grooming lengkap untuk mengasah keterampilan vokasi siswa.',
                'image' => 'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Lapangan Olahraga Serbaguna',
                'category' => 'Fasilitas Olahraga',
                'description' => 'Lapangan terbuka untuk kegiatan futsal, voli, upacara bendera, serta kegiatan ekstra kurikuler outdoor.',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        foreach ($facilities as $data) {
            Facility::updateOrCreate(
                ['name' => $data['name']],
                $data
            );
        }
    }
}
