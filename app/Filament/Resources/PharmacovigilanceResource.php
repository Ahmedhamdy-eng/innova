<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PharmacovigilanceResource\Pages;
use App\Filament\Resources\PharmacovigilanceResource\RelationManagers;
use App\Models\Pharmacovigilance;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PharmacovigilanceResource extends Resource
{
    protected static ?string $model = Pharmacovigilance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Subject Section')
                    ->schema([
                        Forms\Components\TextInput::make('subject_ar')
                            ->label("Arabic subject")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subject_en')
                            ->label("English subject")
                            ->required()
                            ->maxLength(255),
                    ]),

                Section::make('Description Section')
                    ->schema([
                        Forms\Components\Textarea::make('description_ar')
                            ->label("Arabic description")
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description_en')
                            ->label("English description")
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ]),

                Section::make('Contacts Section')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->numeric()
                            ->maxLength(255)
                    ]),


            ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject_ar')
                    ->label("Arabic subject")
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject_en')
                    ->label("English subject")
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPharmacovigilances::route('/'),
            'create' => Pages\CreatePharmacovigilance::route('/create'),
            'edit' => Pages\EditPharmacovigilance::route('/{record}/edit'),
        ];
    }
}
