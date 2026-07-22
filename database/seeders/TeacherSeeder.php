<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        Teacher::query()->delete();
        $teachers = [
            ['name' => 'Ahmad Faruq, M.Pd', 'subject' => 'Kitab Hadist', 'nip' => null],
            ['name' => 'Musdalifah, S.Pd', 'subject' => 'Biologi', 'nip' => null],
            ['name' => 'Mohammad Mahbub, S.Pd', 'subject' => 'Pendidikan Agama Islam dan Budi Pekerti', 'nip' => null],
            ['name' => 'Anisatus Zuhroh, S.Pd', 'subject' => 'Bahasa Indonesia', 'nip' => null],
            ['name' => 'Farhah Hanafiatul, S.Pd', 'subject' => 'Bahasa Indonesia & Pendidikan Pancasila', 'nip' => null],
            ['name' => 'Aidul Fitri, S.M', 'subject' => 'Ekonomi, Seni Budaya, Fisika', 'nip' => null],
            ['name' => 'Jannatul Alfaf Wahyu, S.Pd', 'subject' => 'Fisika, Kimia', 'nip' => null],
            ['name' => 'Muzayyanul Akmal, S.Kom', 'subject' => 'Informatika', 'nip' => null],
            ['name' => 'A. Syaifuddin, S.Pd', 'subject' => 'PJOK', 'nip' => null],
            ['name' => 'Ummul Quro, S.Pd', 'subject' => 'Bahasa Inggris', 'nip' => null],
            ['name' => 'Ust. Moh. Rofiq', 'subject' => 'Aqidatul Awam, Homsumutun, Tajwid', 'nip' => null],
            ['name' => 'Ubaidillah', 'subject' => 'Fiqih dan Nahwu', 'nip' => null],
            ['name' => 'Diel Qaida Ibtisamah, S.Pd', 'subject' => 'Matematika', 'nip' => null],
            ['name' => 'Alaikal Walidul Hakam, S.Pd', 'subject' => 'Sejarah', 'nip' => null],
            ['name' => 'Ilhan Manziz', 'subject' => 'Sosiologi', 'nip' => null],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
