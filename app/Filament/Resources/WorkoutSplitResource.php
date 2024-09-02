<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutSplitResource\Pages;
use App\Filament\Resources\WorkoutSplitResource\RelationManagers;
use App\Models\WorkoutSplit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutSplitResource extends Resource
{
    protected static ?string $model = WorkoutSplit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'routine_name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('routine_name')
                    ->label('Routine Name')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('routine_name')
                    ->label('Routine Name')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListWorkoutSplits::route('/'),
            'create' => Pages\CreateWorkoutSplit::route('/create'),
            'edit' => Pages\EditWorkoutSplit::route('/{record}/edit'),
        ];
    }
}
