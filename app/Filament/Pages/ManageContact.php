<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;

class ManageContact extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationGroup = 'Kontak';
    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Informasi Kontak & Medsos';
    protected static ?string $title = 'Pengaturan Kontak & Media Sosial Sekolah';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.manage-contact';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'school_address' => Setting::get('school_address', 'Jl. Raya Desa Kara, Kecamatan Torjun, Kabupaten Sampang, Jawa Timur 69271'),
            'school_phone' => Setting::get('school_phone', '(0323) 123456 / +62 812-3456-7890'),
            'school_email' => Setting::get('school_email', 'info@smaal-islami.sch.id'),
            'school_work_hours' => Setting::get('school_work_hours', 'Senin - Sabtu: 07.00 - 15.00 WIB'),
            'school_whatsapp' => Setting::get('school_whatsapp', 'https://wa.me/6281234567890'),
            'school_instagram' => Setting::get('school_instagram', 'https://instagram.com/smaalislami'),
            'school_facebook' => Setting::get('school_facebook', 'https://facebook.com/smaalislami'),
            'school_youtube' => Setting::get('school_youtube', 'https://youtube.com/@smaalislami'),
            'school_tiktok' => Setting::get('school_tiktok', 'https://tiktok.com/@smaalislamiofficial'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Kontak Resmi Sekolah')
                    ->description('Informasi alamat, nomor telepon, email, dan jam kerja operasional.')
                    ->schema([
                        Forms\Components\Textarea::make('school_address')
                            ->label('Alamat Lengkap Sekolah')
                            ->required()
                            ->rows(2)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('school_phone')
                            ->label('Nomor Telepon / WhatsApp Sekolah')
                            ->placeholder('Contoh: 083149473113 atau +62 831-4947-3113')
                            ->helperText('Nomor ini akan otomatis dijadikan link rujukan WhatsApp jika Link WhatsApp di bawah tidak diisi secara spesifik.')
                            ->required(),
                        Forms\Components\TextInput::make('school_email')
                            ->label('Email Resmi Sekolah')
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('school_work_hours')
                            ->label('Jam Kerja / Operasional')
                            ->placeholder('Contoh: Senin - Sabtu: 07.00 - 15.00 WIB')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Media Sosial & WhatsApp')
                    ->description('Tautan ke akun media sosial resmi sekolah.')
                    ->schema([
                        Forms\Components\TextInput::make('school_whatsapp')
                            ->label('Link WhatsApp (dengan https://wa.me/...)')
                            ->placeholder('https://wa.me/6281234567890'),
                        Forms\Components\TextInput::make('school_instagram')
                            ->label('Link Instagram')
                            ->placeholder('https://instagram.com/smaalislami'),
                        Forms\Components\TextInput::make('school_facebook')
                            ->label('Link Facebook')
                            ->placeholder('https://facebook.com/smaalislami'),
                        Forms\Components\TextInput::make('school_youtube')
                            ->label('Link YouTube Channel')
                            ->placeholder('https://youtube.com/@smaalislami'),
                        Forms\Components\TextInput::make('school_tiktok')
                            ->label('Link TikTok')
                            ->placeholder('https://tiktok.com/@smaalislamiofficial'),
                    ])->columns(2),
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
            ->title('Informasi kontak berhasil diperbarui!')
            ->success()
            ->send();
    }
}
