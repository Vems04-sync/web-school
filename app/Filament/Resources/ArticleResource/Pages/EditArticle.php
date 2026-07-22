<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (isset($data['image']) && is_string($data['image']) && $data['image'] !== '') {
            $img = $data['image'];
            if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://')) {
                $data['image'] = null;
            } else {
                $disk = Storage::disk('public');
                if (!$disk->exists($img) && !$disk->exists('articles/' . $img)) {
                    $data['image'] = null;
                }
            }
        }

        return $data;
    }
}
