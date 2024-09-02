<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserWorkoutSplitResource\Pages;
use App\Filament\Resources\UserWorkoutSplitResource\RelationManagers;
use App\Models\UserWorkoutSplit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserWorkoutSplitResource extends Resource
{
    protected static ?string $model = UserWorkoutSplit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('workout_split_id')
                    ->label('Workout Split')
                    ->relationship('workoutSplit', 'routine_name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('workoutSplit.routine_name')
                    ->label('Routine Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUserWorkoutSplits::route('/'),
            'create' => Pages\CreateUserWorkoutSplit::route('/create'),
            'edit' => Pages\EditUserWorkoutSplit::route('/{record}/edit'),
        ];
    }
}
