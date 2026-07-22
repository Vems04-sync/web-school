<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;

class ManageAcademic extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Informasi Kurikulum';
    protected static ?string $title = 'Pengaturan Kurikulum & Informasi Akademik';
    protected static ?int $navigationSort = 2;
    protected static string $view = 'filament.pages.manage-academic';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'curriculum_title' => Setting::get('curriculum_title', 'Kurikulum Merdeka'),
            'curriculum_description' => Setting::get('curriculum_description', 'SMA AL-ISLAMI menerapkan Kurikulum Merdeka yang terintegrasi dengan kebutuhan kompetensi Industri & Dunia Kerja (IDUKA). Kurikulum ini dirancang fleksibel untuk memberi keleluasaan kepada pendidik dalam menciptakan pembelajaran berkualitas yang berfokus pada materi esensial, pengembangan karakter, serta minat peserta didik.'),
            'academic_year' => Setting::get('academic_year', '2026/2027'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Kurikulum & Pembelajaran')
                    ->description('Kelola sistem pembelajaran utama dan tahun ajaran aktif.')
                    ->schema([
                        Forms\Components\TextInput::make('curriculum_title')
                            ->label('Judul Sistem Kurikulum')
                            ->required(),
                        Forms\Components\Textarea::make('curriculum_description')
                            ->label('Deskripsi Kurikulum')
                            ->rows(4)
                            ->required()
                            ->helperText('Penjelasan singkat kurikulum yang ditampilkan di Halaman Akademik publik.'),
                        Forms\Components\TextInput::make('academic_year')
                            ->label('Tahun Ajaran Aktif')
                            ->placeholder('Contoh: 2026/2027')
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        
        Setting::set('curriculum_title', $data['curriculum_title']);
        Setting::set('curriculum_description', $data['curriculum_description']);
        Setting::set('academic_year', $data['academic_year']);

        Notification::make()
            ->title('Informasi kurikulum & akademik berhasil disimpan!')
            ->success()
            ->send();
    }
}
