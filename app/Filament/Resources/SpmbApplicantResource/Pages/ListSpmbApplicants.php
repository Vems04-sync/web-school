<?php

namespace App\Filament\Resources\SpmbApplicantResource\Pages;

use App\Filament\Resources\SpmbApplicantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpmbApplicants extends ListRecords
{
    protected static string $resource = SpmbApplicantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
