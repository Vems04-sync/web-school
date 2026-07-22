<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;

class ManageSpmb extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationGroup = 'Pendaftaran';
    protected static ?string $navigationIcon = 'heroicon-o-document-check';
    protected static ?string $navigationLabel = 'Informasi & Syarat SPMB';
    protected static ?string $title = 'Pengaturan Informasi & Persyaratan SPMB';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.manage-spmb';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'spmb_status_text' => Setting::get('spmb_status_text', 'PENDAFTARAN DIBUKA • TAHUN AJARAN 2026/2027'),
            'spmb_info_items' => Setting::get('spmb_info_items', "Pendaftaran dibuka mulai 1 Februari – 30 Juni 2026\nPendaftaran dilakukan online melalui portal ini\nTidak dipungut biaya pendaftaran (GRATIS)\nTersedia pilihan jurusan TKJ, Akuntansi, dan Administrasi Perkantoran\nInfo lebih lanjut hubungi: Tata Usaha (0831-4947-3113)"),
            'spmb_requirements_items' => Setting::get('spmb_requirements_items', "Fotokopi Ijazah / SKHUN SD/MI yang telah dilegalisir\nFotokopi Kartu Keluarga (KK)\nAkta Kelahiran asli/fotokopi\nPas foto berwarna 3×4 sebanyak 4 lembar\nSurat Keterangan Sehat dari dokter\nRapor kelas 4, 5, dan 6 SD/MI (asli)"),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Banner Status Pendaftaran SPMB')
                    ->description('Teks status pendaftaran yang tampil pada header banner portal SPMB.')
                    ->schema([
                        Forms\Components\TextInput::make('spmb_status_text')
                            ->label('Status & Tahun Ajaran Banner')
                            ->placeholder('Contoh: PENDAFTARAN DIBUKA • TAHUN AJARAN 2026/2027')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Informasi Umum Pendaftaran')
                    ->description('Poin-poin informasi pendaftaran (Tuliskan 1 poin per baris).')
                    ->schema([
                        Forms\Components\Textarea::make('spmb_info_items')
                            ->label('Poin Informasi Pendaftaran')
                            ->rows(5)
                            ->helperText('Setiap baris baru akan menjadi 1 poin centang hijau pada kartu Informasi Pendaftaran.')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Persyaratan Dokumen')
                    ->description('Daftar dokumen persyaratan pendaftaran (Tuliskan 1 dokumen per baris).')
                    ->schema([
                        Forms\Components\Textarea::make('spmb_requirements_items')
                            ->label('Poin Persyaratan Dokumen')
                            ->rows(6)
                            ->helperText('Setiap baris baru akan menjadi 1 poin bernomor pada kartu Persyaratan Dokumen.')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        foreach ($data as $key => $value) {
            Setting::set($key, $value);
        }

        Notification::make()
            ->title('Informasi dan persyaratan SPMB berhasil disimpan!')
            ->success()
            ->send();
    }
}
