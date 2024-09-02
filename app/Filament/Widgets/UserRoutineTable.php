<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class UserRoutineTable extends TableWidget
{
    protected static ?string $heading = 'User Routines';
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        // Eager load workoutSplits to prevent N+1 queries
        return User::query()->with('workoutSplits');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('User Name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('email')
                ->label('Email')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('workoutSplits.routine_name')
                ->label('Routines')
                ->formatStateUsing(function ($state, $record) {
                    // Ensure we are handling the workoutSplits relationship correctly
                    $routineNames = $record->workoutSplits->pluck('routine_name')->toArray();
                    return implode(', ', $routineNames);
                })
                ->searchable()
                ->sortable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            //
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return true;
    }
}
