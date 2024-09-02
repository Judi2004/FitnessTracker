<?php

namespace App\Filament\Resources\WorkoutSplitResource\Pages;

use App\Filament\Resources\WorkoutSplitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutSplits extends ListRecords
{
    protected static string $resource = WorkoutSplitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
