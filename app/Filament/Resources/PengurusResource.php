<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Models\Pengurus;
use Filament\Forms;          // Komponen Form untuk TextInput, FileUpload
use Filament\Forms\Form;    // Form untuk mengonfigurasi schema
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;
    protected static ?string $navigationLabel = 'Pengurus';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Pengurus')
                    ->required(),

                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),

                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->required()
                    ->maxSize(5120),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->label('Foto')->width(100),
                TextColumn::make('nama')->label('Nama Pengurus'),
                TextColumn::make('jabatan')->label('Jabatan'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(), // Tombol Edit
                Tables\Actions\DeleteAction::make(), // Tombol Delete
                Tables\Actions\ViewAction::make() // Tombol View
                    ->label('Lihat Pengurus'), // Label untuk tombol View
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make() // Tombol Add (Create)
                    ->label('Tambah Pengurus') // Label untuk tombol Create
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengurus::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
            'view' => Pages\ViewPengurus::route('/{record}'),
        ];
    }

    // Override the route prefix here
    public static function getRoutePrefix(): string
    {
        return 'pengurus'; // Set your desired singular route prefix
    }
}
