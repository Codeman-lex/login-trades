<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccountBalanceResource\Pages;
use App\Filament\Resources\AccountBalanceResource\RelationManagers;
use App\Models\AccountBalance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccountBalanceResource extends Resource
{
    protected static ?string $model = AccountBalance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('principal_amount')
                    ->numeric()
                    ->required()
                    ->prefix('$'),
                Forms\Components\TextInput::make('current_balance')
                    ->numeric()
                    ->required()
                    ->prefix('$'),
                Forms\Components\DateTimePicker::make('last_growth_applied_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('principal_amount')
                    ->money('usd')
                    ->sortable(),
                Tables\Columns\TextColumn::make('current_balance')
                    ->money('usd')
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_growth_applied_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('manualAdjust')
                    ->label('Manual Adjustment')
                    ->icon('heroicon-o-pencil-square')
                    ->color('warning')
                    ->form([
                        Forms\Components\TextInput::make('new_balance')
                            ->label('New Balance')
                            ->numeric()
                            ->required()
                            ->prefix('$')
                            ->helperText('This will update the balance WITHOUT creating a transaction log.'),
                    ])
                    ->action(function (AccountBalance $record, array $data) {
                        $balanceService = app(\App\Services\BalanceService::class);
                        $balanceService->silentEdit($record->user, $data['new_balance']);
                        
                        \Filament\Notifications\Notification::make()
                            ->title('Balance Updated')
                            ->body("Balance manually adjusted to $" . number_format($data['new_balance'], 2) . " (not logged)")
                            ->success()
                            ->send();
                    }),
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
            'index' => Pages\ListAccountBalances::route('/'),
            'create' => Pages\CreateAccountBalance::route('/create'),
            'edit' => Pages\EditAccountBalance::route('/{record}/edit'),
        ];
    }
}
