<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $navigationIcon = 'heroicon-o-link';
    protected static ?string $navigationLabel = 'Link Google Form';
    protected static ?string $title = 'Pengaturan Link Google Form';
    protected static string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'spmb_gform_url' => Setting::get('spmb_gform_url', 'https://forms.google.com'),
            'extracurricular_gform_url' => Setting::get('extracurricular_gform_url', 'https://forms.google.com'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Link Pendaftaran SPMB')
                    ->description('Gunakan form ini untuk mengatur link pendaftaran siswa baru.')
                    ->schema([
                        Forms\Components\TextInput::make('spmb_gform_url')
                            ->label('Link Google Form SPMB')
                            ->required()
                            ->helperText('Masukkan link Google Form pendaftaran SPMB. Link ini akan ditampilkan di halaman SPMB publik.'),
                    ]),
                Forms\Components\Section::make('Link Pendaftaran Ekstrakurikuler')
                    ->description('Gunakan form ini untuk mengatur link pendaftaran kegiatan ekstrakurikuler.')
                    ->schema([
                        Forms\Components\TextInput::make('extracurricular_gform_url')
                            ->label('Link Google Form Ekstrakurikuler')
                            ->required()
                            ->helperText('Masukkan link Google Form pendaftaran Ekstrakurikuler. Link ini akan ditampilkan di halaman Kesiswaan.'),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        Setting::set('spmb_gform_url', $data['spmb_gform_url']);
        Setting::set('extracurricular_gform_url', $data['extracurricular_gform_url']);

        Notification::make()
            ->title('Pengaturan berhasil disimpan!')
            ->success()
            ->send();
    }
}
