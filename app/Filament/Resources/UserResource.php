<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->placeholder('Enter your name'),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->placeholder('Enter your email address'),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->placeholder('Enter your password')
                    ->password()
                    ->autocomplete('new-password'),
                // Forms\Components\TextInput::make('address')
                //     ->label('Address')
                //     ->required()
                //     ->placeholder('Enter your address'),
                // Forms\Components\TextInput::make('phone')
                //     ->label('Phone')
                //     ->required()
                //     ->placeholder('Enter your phone number'),
                // Forms\Components\DatePicker::make('dob')
                //     ->label('Date of Birth')
                //     ->required()
                //     ->placeholder('Enter your date of birth'),
                // Forms\Components\Select::make('usertype')
                //     ->label('User Type')
                //     ->required()
                //     ->options([
                //         'member' => 'Member',
                //         'trainer' => 'Trainer',
                //         'admin' => 'Admin',
                //     ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dob')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('usertype')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
