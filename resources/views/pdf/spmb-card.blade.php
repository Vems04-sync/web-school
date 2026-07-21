<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kartu SPMB - {{ $applicant->registration_number }}</title>
    <style>
        body { font-family: sans-serif; color: #333; line-height: 1.5; }
        .header { text-align: center; border-bottom: 2px solid #ea580c; padding-bottom: 15px; margin-bottom: 25px; }
        .header h1 { margin: 0; color: #ea580c; font-size: 24px; text-transform: uppercase; }
        .header p { margin: 5px 0 0 0; font-size: 14px; color: #666; }
        .title { text-align: center; font-size: 18px; font-weight: bold; margin-bottom: 20px; text-decoration: underline; }
        .reg-number { text-align: center; font-size: 20px; font-weight: bold; background: #f1f5f9; padding: 10px; border: 1px dashed #cbd5e1; margin-bottom: 30px; letter-spacing: 2px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table th { text-align: left; width: 30%; padding: 8px; border-bottom: 1px solid #e2e8f0; color: #475569; }
        table td { padding: 8px; border-bottom: 1px solid #e2e8f0; font-weight: bold; }
        .footer { text-align: center; font-size: 12px; color: #64748b; margin-top: 50px; border-top: 1px solid #e2e8f0; padding-top: 15px; }
        .warning { background: #fffbeb; padding: 15px; border-left: 4px solid #f59e0b; font-size: 13px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>SMA AL-ISLAMI</h1>
        <p>Panitia Seleksi Penerimaan Siswa Baru Tahun Ajaran 2026/2027</p>
    </div>

    <div class="title">KARTU BUKTI PENDAFTARAN SPMB</div>

    <div class="reg-number">
        NO. REGISTRASI: {{ $applicant->registration_number }}
    </div>

    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td>: {{ mb_strtoupper($applicant->full_name) }}</td>
        </tr>
        <tr>
            <th>NISN</th>
            <td>: {{ $applicant->nisn }}</td>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <td>: {{ mb_strtoupper($applicant->previous_school) }}</td>
        </tr>
        <tr>
            <th>Tanggal Daftar</th>
            <td>: {{ $applicant->created_at->format('d F Y H:i') }}</td>
        </tr>
    </table>

    <div class="warning">
        <strong>PENTING:</strong><br>
        1. Simpan dokumen ini dan bawa saat pelaksanaan tes seleksi / daftar ulang.<br>
        2. Pantau terus status kelulusan Anda melalui menu "Cek Kelulusan" di website kami menggunakan Nomor Registrasi di atas.<br>
        3. Jika ada pertanyaan, hubungi panitia melalui kontak resmi yang tertera di website.
    </div>

    <div class="footer">
        Dicetak secara otomatis oleh sistem pada {{ now()->format('d M Y H:i') }}
    </div>
</body>
</html>
