<?php

namespace App\Filament\Resources\UserWorkoutSplitResource\Pages;

use App\Filament\Resources\UserWorkoutSplitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserWorkoutSplits extends ListRecords
{
    protected static string $resource = UserWorkoutSplitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
