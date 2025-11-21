<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoiSettingResource\Pages;
use App\Filament\Resources\RoiSettingResource\RelationManagers;
use App\Models\RoiSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoiSettingResource extends Resource
{
    protected static ?string $model = RoiSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->helperText('Leave empty for global setting'),
                Forms\Components\Select::make('scope')
                    ->options([
                        'global' => 'Global',
                        'user' => 'User Specific',
                    ])
                    ->required()
                    ->default('user'),
                Forms\Components\TextInput::make('daily_rate_percent')
                    ->label('Daily Rate (%)')
                    ->numeric()
                    ->required()
                    ->step(0.01),
                Forms\Components\Toggle::make('active')
                    ->required()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->placeholder('Global')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('scope')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'global' => 'primary',
                        'user' => 'info',
                    }),
                Tables\Columns\TextColumn::make('daily_rate_percent')
                    ->label('Rate')
                    ->suffix('%')
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRoiSettings::route('/'),
            'create' => Pages\CreateRoiSetting::route('/create'),
            'edit' => Pages\EditRoiSetting::route('/{record}/edit'),
        ];
    }
}
