<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSlideResource\Pages;
use App\Models\HeroSlide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HeroSlideResource extends Resource
{
    protected static ?string $model = HeroSlide::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?string $navigationGroup = 'Beranda';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Slideshow Beranda';
    protected static ?string $modelLabel = 'Slide';
    protected static ?string $pluralModelLabel = 'Slideshow Beranda';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama Slide')
                    ->description('Pengaturan judul, tagline, deskripsi, dan gambar latar slideshow.')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Utama Slide')
                            ->placeholder('Contoh: Selamat Datang SMA AL-ISLAMI')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tagline')
                            ->label('Sub-Judul / Tagline Atas')
                            ->placeholder('Contoh: Membentuk Generasi Berakhlak, Cerdas, dan Mandiri')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar Latar Belakang Slide')
                            ->image()
                            ->disk('public')
                            ->directory('slides')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->helperText('Maksimal ukuran gambar yang dapat diupload adalah 2 MB (Format: JPG, JPEG, PNG, WEBP).')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Pengaturan Tampil')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(1)
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->getStateUsing(function (HeroSlide $record) {
                        $rawImage = $record->getRawOriginal('image');
                        if (!$rawImage) {
                            return 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80';
                        }
                        if (str_starts_with($rawImage, 'http://') || str_starts_with($rawImage, 'https://')) {
                            return $rawImage;
                        }
                        return asset('storage/' . $rawImage);
                    }),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Slide')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('tagline')
                    ->label('Tagline')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),
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
            'index' => Pages\ListHeroSlides::route('/'),
            'create' => Pages\CreateHeroSlide::route('/create'),
            'edit' => Pages\EditHeroSlide::route('/{record}/edit'),
        ];
    }
}
