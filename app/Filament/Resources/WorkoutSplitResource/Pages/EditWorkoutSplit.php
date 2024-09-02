<?php

namespace App\Filament\Resources\WorkoutSplitResource\Pages;

use App\Filament\Resources\WorkoutSplitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkoutSplit extends EditRecord
{
    protected static string $resource = WorkoutSplitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
