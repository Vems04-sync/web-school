<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'order' => 1,
                'tagline' => 'Membentuk Generasi Berakhlak, Cerdas, dan Mandiri',
                'title' => 'Selamat Datang SMA AL-ISLAMI',
                'description' => 'SMA AL-ISLAMI berkomitmen menyelenggarakan pendidikan terpadu ilmu agama dan umum untuk mencetak lulusan yang bertakwa, berakhlakul karimah, serta memiliki kecakapan hidup (lifeskill).',
                'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1920&q=80',
                'primary_btn_text' => 'Daftar SPMB',
                'primary_btn_url' => '/spmb',
                'secondary_btn_text' => 'Jelajahi Profil',
                'secondary_btn_url' => '/profil',
                'is_active' => true,
            ],
            [
                'order' => 2,
                'tagline' => 'Fasilitas Vokasi Modern',
                'title' => 'Kurikulum Berbasis Industri & Teknologi',
                'description' => 'Menyediakan sarana laboratorium praktik tercanggih guna mempersiapkan lulusan yang siap kerja dan berwirausaha.',
                'image' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1920&q=80',
                'primary_btn_text' => 'Info Akademik',
                'primary_btn_url' => '/akademik',
                'secondary_btn_text' => 'Hubungi Kami',
                'secondary_btn_url' => '/kontak',
                'is_active' => true,
            ],
            [
                'order' => 3,
                'tagline' => 'Prestasi & Ekstrakurikuler',
                'title' => 'Mengembangkan Potensi Terbaik Siswa',
                'description' => 'Membina minat, bakat, keagamaan, serta karakter kepemimpinan siswa melalui segudang prestasi nasional.',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1920&q=80',
                'primary_btn_text' => 'Lihat Berita',
                'primary_btn_url' => '/berita',
                'secondary_btn_text' => 'Unduhan Brosur',
                'secondary_btn_url' => '/download',
                'is_active' => true,
            ],
        ];

        foreach ($slides as $data) {
            HeroSlide::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
