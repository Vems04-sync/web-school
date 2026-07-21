<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Document;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Articles
        $articles = [
            [
                'title' => 'Pendaftaran SPMB Gelombang 1 Resmi Dibuka',
                'slug' => Str::slug('Pendaftaran SPMB Gelombang 1 Resmi Dibuka'),
                'content' => 'Madrasah Tsanawiyah Negeri Nusantara telah resmi membuka pendaftaran bagi calon peserta didik baru untuk tahun ajaran mendatang. Proses seleksi menggunakan sistem online.',
                'image' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=600&q=80',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Tim Robotik MTsN Nusantara Raih Emas Nasional',
                'slug' => Str::slug('Tim Robotik MTsN Nusantara Raih Emas Nasional'),
                'content' => 'Sebuah kebanggaan luar biasa, tim ekstrakurikuler robotik madrasah kita berhasil meraih medali emas pada kompetisi robotik pelajar tingkat nasional di Jakarta.',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Pesantren Kilat Ramadhan Perkuat Karakter Siswa',
                'slug' => Str::slug('Pesantren Kilat Ramadhan Perkuat Karakter Siswa'),
                'content' => 'Dalam rangka mengisi bulan suci Ramadhan, seluruh siswa mengikuti program pesantren kilat yang berfokus pada tahsin Quran dan pembentukan akhlak mulia.',
                'image' => 'https://images.unsplash.com/photo-1606761568499-6d2451b23c66?auto=format&fit=crop&w=600&q=80',
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }

        // Seed Documents
        $documents = [
            [
                'title' => 'Brosur SPMB MTsN Nusantara',
                'description' => 'Brosur resmi informasi pendaftaran peserta didik baru.',
                'file_path' => '#',
            ],
            [
                'title' => 'Tata Tertib Siswa',
                'description' => 'Aturan dan kedisiplinan yang berlaku di lingkungan madrasah.',
                'file_path' => '#',
            ],
            [
                'title' => 'Kalender Akademik 2026/2027',
                'description' => 'Jadwal lengkap kegiatan belajar mengajar.',
                'file_path' => '#',
            ],
        ];

        foreach ($documents as $document) {
            Document::create($document);
        }
    }
}
