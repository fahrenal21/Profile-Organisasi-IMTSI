<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemisionerResource\Pages;
use App\Models\Demisioner;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class DemisionerResource extends Resource
{
    protected static ?string $model = Demisioner::class;
    protected static ?string $navigationLabel = 'Demisioner';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                
                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),
                
                TextInput::make('periode')
                    ->label('Periode')  // Menambahkan field periode
                    ->required(),
                
                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->required()
                    ->maxSize(5120), // Max 5MB
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->label('Foto')->width(100),
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('jabatan')->label('Jabatan'),
                TextColumn::make('periode')->label('Periode'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                ->label('Lihat Pengurus'), 
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDemisioner::route('/'),
            'create' => Pages\CreateDemisioner::route('/create'),
            'edit' => Pages\EditDemisioner::route('/{record}/edit'),
        ];
    }
}
