<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationGroup = 'Kesiswaan';
    protected static ?string $navigationLabel = 'Prestasi Siswa';
    protected static ?string $modelLabel = 'Prestasi Siswa';
    protected static ?string $pluralModelLabel = 'Prestasi Siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_name')
                    ->label('Nama Siswa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->label('Judul Prestasi / Lomba')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('level')
                    ->label('Tingkat')
                    ->options([
                        'Sekolah' => 'Tingkat Sekolah',
                        'Kabupaten/Kota' => 'Tingkat Kabupaten/Kota',
                        'Provinsi' => 'Tingkat Provinsi (Regional)',
                        'Nasional' => 'Tingkat Nasional',
                        'Internasional' => 'Tingkat Internasional',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('year')
                    ->label('Tahun')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi/Keterangan')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('Foto Dokumentasi')
                    ->image()
                    ->disk('public')
                    ->directory('achievements')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->helperText('Maksimal ukuran gambar yang dapat diupload adalah 2 MB (Format: JPG, JPEG, PNG, WEBP).'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular()
                    ->getStateUsing(function (Achievement $record) {
                        if (!$record->image) {
                            return 'https://images.unsplash.com/photo-1578269174936-2709b6aeb913?auto=format&fit=crop&w=600&q=80';
                        }
                        if (str_starts_with($record->image, 'http://') || str_starts_with($record->image, 'https://')) {
                            return $record->image;
                        }
                        return asset('storage/' . $record->image);
                    }),
                Tables\Columns\TextColumn::make('student_name')
                    ->label('Nama Siswa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Prestasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->label('Tingkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
