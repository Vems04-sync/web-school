<?php

namespace Database\Seeders;

use App\Models\AcademicCalendar;
use Illuminate\Database\Seeder;

class AcademicCalendarSeeder extends Seeder
{
    public function run(): void
    {
        $calendars = [
            [
                'order' => 1,
                'title' => 'Masa Pengenalan Lingkungan Sekolah (MPLS)',
                'date_description' => '6 – 9 Juli 2026 (4 hari)',
                'type' => 'kegiatan',
            ],
            [
                'order' => 2,
                'title' => 'Awal Tahun Pelajaran',
                'date_description' => '13 Juli 2026',
                'type' => 'awal',
            ],
            [
                'order' => 3,
                'title' => 'Pembelajaran Semester Ganjil',
                'date_description' => 'Juli – Desember 2026',
                'type' => 'belajar',
            ],
            [
                'order' => 4,
                'title' => 'Kegiatan Tengah Semester',
                'date_description' => 'Awal Oktober 2026 (sesuai kalender Dinas)',
                'type' => 'kegiatan',
            ],
            [
                'order' => 5,
                'title' => 'Penilaian / Asesmen Akhir Semester Ganjil',
                'date_description' => 'Desember 2026',
                'type' => 'ujian',
            ],
            [
                'order' => 6,
                'title' => 'Libur Semester Ganjil',
                'date_description' => '26 Desember 2026 – 2 Januari 2027',
                'type' => 'libur',
            ],
            [
                'order' => 7,
                'title' => 'Awal Semester Genap',
                'date_description' => 'Januari 2027',
                'type' => 'awal',
            ],
            [
                'order' => 8,
                'title' => 'Pembelajaran Semester Genap',
                'date_description' => 'Januari – Juni 2027',
                'type' => 'belajar',
            ],
            [
                'order' => 9,
                'title' => 'Penilaian / Asesmen Akhir Semester Genap',
                'date_description' => 'Juni 2027',
                'type' => 'ujian',
            ],
            [
                'order' => 10,
                'title' => 'Pembagian Rapor Semester Genap',
                'date_description' => 'Juni 2027',
                'type' => 'kegiatan',
            ],
            [
                'order' => 11,
                'title' => 'Libur Akhir Tahun Pelajaran',
                'date_description' => '21 Juni – 10 Juli 2027',
                'type' => 'libur',
            ],
        ];

        foreach ($calendars as $data) {
            AcademicCalendar::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
