<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $achievements = [
            [
                'student_name' => 'Ahmad Fauzi & Tim',
                'title' => 'Juara 1 Medali Emas Robotik Pelajar Nasional',
                'level' => 'Nasional',
                'year' => '2026',
                'description' => 'Berhasil meraih medali emas pada Kategori Creative Robotik Pelajar Tingkat Nasional di Jakarta.',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'student_name' => 'Siti Nurhaliza',
                'title' => 'Juara 1 KSN Matematika Kabupaten Sampang',
                'level' => 'Kabupaten/Kota',
                'year' => '2025',
                'description' => 'Meraih predikat terbaik tingkat Kabupaten Sampang dalam bidang olimpiade matematika.',
                'image' => 'https://images.unsplash.com/photo-1578269174936-2709b6aeb913?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'student_name' => 'Tim MFQ SMA AL-ISLAMI',
                'title' => 'Juara 2 Musabaqah Fahmil Quran (MFQ) Tingkat Provinsi',
                'level' => 'Provinsi',
                'year' => '2025',
                'description' => 'Meraih Juara 2 pada ajang Musabaqah Tilawatil Quran & Fahmil Quran tingkat Provinsi Jawa Timur.',
                'image' => 'https://images.unsplash.com/photo-1606761568499-6d2451b23c66?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'student_name' => 'Tim Futsal SMA AL-ISLAMI',
                'title' => 'Juara 1 Turnamen Futsal Pelajar Antar SMA',
                'level' => 'Kabupaten/Kota',
                'year' => '2024',
                'description' => 'Menjadi juara pertama pada turnamen futsal antar sekolah menengah atas se-Kabupaten Sampang.',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        foreach ($achievements as $data) {
            Achievement::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
