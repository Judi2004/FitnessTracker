<?php

namespace App\Filament\Resources\WorkoutSplitDetailResource\Pages;

use App\Filament\Resources\WorkoutSplitDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutSplitDetails extends ListRecords
{
    protected static string $resource = WorkoutSplitDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
