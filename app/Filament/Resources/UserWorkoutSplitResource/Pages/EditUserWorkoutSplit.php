<?php

namespace App\Filament\Resources\UserWorkoutSplitResource\Pages;

use App\Filament\Resources\UserWorkoutSplitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserWorkoutSplit extends EditRecord
{
    protected static string $resource = UserWorkoutSplitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
