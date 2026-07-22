<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicCalendarResource\Pages;
use App\Models\AcademicCalendar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AcademicCalendarResource extends Resource
{
    protected static ?string $model = AcademicCalendar::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Kalender Akademik';
    protected static ?string $modelLabel = 'Agenda Kalender';
    protected static ?string $pluralModelLabel = 'Kalender Akademik';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Nama Kegiatan / Agenda')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('date_description')
                    ->label('Waktu Pelaksanaan')
                    ->placeholder('Contoh: 6 – 9 Juli 2026')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->label('Kategori Agenda')
                    ->options([
                        'kegiatan' => 'Kegiatan Sekolah',
                        'awal'     => 'Awal Semester',
                        'belajar'  => 'Pembelajaran',
                        'ujian'    => 'Asesmen / Ujian',
                        'libur'    => 'Libur Sekolah',
                    ])
                    ->required()
                    ->native(false),
                Forms\Components\TextInput::make('order')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('No / Urutan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Kegiatan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('date_description')
                    ->label('Waktu Pelaksanaan'),
                Tables\Columns\TextColumn::make('type')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'kegiatan' => 'info',
                        'awal'     => 'success',
                        'belajar'  => 'primary',
                        'ujian'    => 'warning',
                        'libur'    => 'danger',
                        default    => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'kegiatan' => 'Kegiatan Sekolah',
                        'awal'     => 'Awal Semester',
                        'belajar'  => 'Pembelajaran',
                        'ujian'    => 'Asesmen / Ujian',
                        'libur'    => 'Libur Sekolah',
                        default    => $state,
                    }),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAcademicCalendars::route('/'),
            'create' => Pages\CreateAcademicCalendar::route('/create'),
            'edit' => Pages\EditAcademicCalendar::route('/{record}/edit'),
        ];
    }
}
