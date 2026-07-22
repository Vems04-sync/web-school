<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    public function run(): void
    {
        Organization::query()->delete();
        $organizations = [
            ['name' => 'Ahmad Faruq, M.Pd', 'position' => 'Kepala Sekolah', 'order' => 1],
            ['name' => 'Mohammad Mahbub, S.Pd', 'position' => 'Waka Kurikulum', 'order' => 2],
            ['name' => 'Jannatul Alfaf W, S.Pd', 'position' => 'Waka Kesiswaan', 'order' => 3],
            ['name' => 'Ummu Habibah, S.Pd', 'position' => 'Waka Sarana Prasarana', 'order' => 4],
            ['name' => 'A. Syaifuddin, S.Pd', 'position' => 'Waka Humas', 'order' => 5],
            ['name' => 'Aidul Fitri, S.M', 'position' => 'Ka. Lab Komputer', 'order' => 6],
            ['name' => 'Diel Qaida Ibtisamah, S.Pd', 'position' => 'Ka. Lab Bahasa', 'order' => 7],
            ['name' => 'Musdalifah, S.Pd', 'position' => 'Ka. Lab IPA', 'order' => 8],
            ['name' => 'Farhah Hanafiatul, S.Pd', 'position' => 'Ka. Lab Perpustakaan', 'order' => 9],
            ['name' => 'Anisatus Zuhroh, S.Pd', 'position' => 'Wali Kelas X', 'order' => 10],
            ['name' => 'A. Syaifuddin, S.Pd', 'position' => 'Wali Kelas X2', 'order' => 11],
            ['name' => 'Ummul Quro, S.Pd', 'position' => 'Wali Kelas XI', 'order' => 12],
            ['name' => 'Muzayyanul Akmal, S.Pd', 'position' => 'Wali Kelas XII', 'order' => 13],
        ];

        foreach ($organizations as $organization) {
            Organization::create($organization);
        }
    }
}
