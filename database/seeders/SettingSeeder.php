<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'school_history' => 'SMA AL-ISLAMI didirikan sebagai lembaga pendidikan menengah yang berdedikasi tinggi dalam memadukan keunggulan akademik, pembinaan akhlak mulia berlandaskan nilai-nilai Islami, serta pembekalan keterampilan vokasi praktis. Berada di lingkungan yang kondusif di Desa Kara, Kecamatan Torjun, Kabupaten Sampang, SMA AL-ISLAMI berkomitmen membentuk lulusan yang berdaya saing tinggi, mandiri, dan berkarakter Islami.',
            'logo_philosophy' => 'Perisai melambangkan ketahanan moral, obor melambangkan pencerahan ilmu pengetahuan, dan roda gigi melambangkan kompetensi vokasi industri.',
            'core_values' => 'Religius, Jujur, Disiplin, Inovatif, dan Kolaboratif menjadi pijakan utama dalam budaya belajar mengajar harian kami.',
            'school_vision' => 'Beriman dan bertaqwa kepada Allah SWT, Cerdas, Terampil, Kreatif, Mandiri, dan Berakhlakul Karimah.',
            'school_mission' => "1. Meningkatkan iman dan taqwa kepada Allah SWT.\n2. Membudayakan kepribadian luhur yang berorientasi akhlakul karimah.\n3. Menerapkan budaya 5S (Salam, Senyum, Sapa, Sopan, Santun).\n4. Meningkatkan potensi, kreativitas, dan bakat sebagai bekal kecakapan hidup (lifeskill).\n5. Meningkatkan mutu akademik dan non akademik.\n6. Menyediakan pendidikan terpadu antara ilmu agama dan ilmu umum.",
            'curriculum_title' => 'Kurikulum Merdeka',
            'curriculum_description' => 'SMA AL-ISLAMI menerapkan Kurikulum Merdeka yang terintegrasi dengan kebutuhan kompetensi Industri & Dunia Kerja (IDUKA). Kurikulum ini dirancang fleksibel untuk memberi keleluasaan kepada pendidik dalam menciptakan pembelajaran berkualitas yang berfokus pada materi esensial, pengembangan karakter, serta minat peserta didik.',
            'academic_year' => '2026/2027',
            'spmb_gform_url' => 'https://forms.google.com',
            'extracurricular_gform_url' => 'https://forms.google.com',
            'school_address' => 'Jl. Raya Desa Kara, Kecamatan Torjun, Kabupaten Sampang, Jawa Timur 69271',
            'school_phone' => '0831-4947-3113',
            'school_email' => 'smaalislamiofficial@gmail.com',
            'school_work_hours' => 'Senin - Sabtu: 07.30 - 15.00 WIB',
            'school_whatsapp' => 'https://wa.me/6283149473113',
            'school_instagram' => 'https://www.instagram.com/smaalislamiofficial',
            'school_facebook' => 'https://www.facebook.com/share/1E9FKd3Kz1/',
            'school_youtube' => 'https://youtube.com/@smaalislamiofficial',
            'school_tiktok' => 'https://tiktok.com/@smaalislamiofficial',
            'school_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0509927950907!2d113.19924487499836!3d-7.120089292883585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8294b789e85f1%3A0x28634fa48ceab6bd!2sSMA%20AL%20ISLAMI!5e0!3m2!1sid!2sid!4v1784737722383!5m2!1sid!2sid',
            
            // SPMB Settings
            'spmb_status_text' => 'PENDAFTARAN DIBUKA • TAHUN AJARAN 2026/2027',
            'spmb_info_items' => "Pendaftaran dibuka mulai 1 Februari – 30 Juni 2026\nPendaftaran dilakukan online melalui portal ini\nTidak dipungut biaya pendaftaran (GRATIS)\nTersedia pilihan jurusan TKJ, Akuntansi, dan Administrasi Perkantoran\nInfo lebih lanjut hubungi: Tata Usaha (0831-4947-3113)",
            'spmb_requirements_items' => "Fotokopi Ijazah / SKHUN SD/MI yang telah dilegalisir\nFotokopi Kartu Keluarga (KK)\nAkta Kelahiran asli/fotokopi\nPas foto berwarna 3×4 sebanyak 4 lembar\nSurat Keterangan Sehat dari dokter\nRapor kelas 4, 5, dan 6 SD/MI (asli)",
            'spmb_schedule_items' => "Buka Pendaftaran | 1 Feb – 30 Jun 2026\nTes Seleksi Tulis | 5 Jul 2026\nTes Wawancara | 8 Jul 2026\nPengumuman Hasil | 10 Jul 2026\nDaftar Ulang | 11–13 Jul 2026",
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }
}
