<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutSplitDetailResource\Pages;
use App\Filament\Resources\WorkoutSplitDetailResource\RelationManagers;
use App\Models\WorkoutSplitDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutSplitDetailResource extends Resource
{
    protected static ?string $model = WorkoutSplitDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('workout_split_id')
                    ->label('Workout Split')
                    ->relationship('workoutSplit', 'routine_name')
                    ->required(),
                Forms\Components\Select::make('exercise_id')
                    ->label('Exercise')
                    ->relationship('exercise', 'name')
                    ->required(),
                Forms\Components\TextInput::make('weight')
                    ->label('Weight')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\TextInput::make('reps')
                    ->label('Reps')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\TextInput::make('sets')
                    ->label('Sets')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\TextInput::make('rest')
                    ->label('Rest')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->label('Notes'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('workoutSplit.routine_name')
                    ->label('Workout Split')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exercise.name')
                    ->label('Exercise')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('weight')
                    ->label('Weight')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reps')
                    ->label('Reps')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sets')
                    ->label('Sets')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rest')
                    ->label('Rest')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('notes')
                    ->label('Notes')
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
            'index' => Pages\ListWorkoutSplitDetails::route('/'),
            'create' => Pages\CreateWorkoutSplitDetail::route('/create'),
            'edit' => Pages\EditWorkoutSplitDetail::route('/{record}/edit'),
        ];
    }
}
