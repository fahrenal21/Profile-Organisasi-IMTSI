<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DewanPengawasResource\Pages;
use App\Models\DewanPengawas;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class DewanPengawasResource extends Resource
{
    protected static ?string $model = DewanPengawas::class;
    protected static ?string $navigationLabel = 'Dewan Pengawas';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Pengawas')
                    ->required(),

                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),

                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->required()
                    ->maxSize(5120), // 5 MB max size
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->label('Foto')->width(100),
                TextColumn::make('nama')->label('Nama Pengawas'),
                TextColumn::make('jabatan')->label('Jabatan'),
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
            'index' => Pages\ListDewanPengawas::route('/'),
            'create' => Pages\CreateDewanPengawas::route('/create'),
            'edit' => Pages\EditDewanPengawas::route('/{record}/edit'),
        ];
    }
}
