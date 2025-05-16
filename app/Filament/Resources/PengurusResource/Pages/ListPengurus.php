<?php

namespace App\Filament\Resources\PengurusResource\Pages;

use App\Filament\Resources\PengurusResource;
use Filament\Resources\Pages\ListRecords;

class ListPengurus extends ListRecords
{
    protected static string $resource = PengurusResource::class;

    // Optional: Customize Table Columns, Filters, or Actions
    public function getTableColumns(): array
    {
        return [
            \Filament\Tables\Columns\ImageColumn::make('foto')->label('Foto')->width(100),
            \Filament\Tables\Columns\TextColumn::make('nama')->label('Nama Pengurus'),
            \Filament\Tables\Columns\TextColumn::make('jabatan')->label('Jabatan'),
        ];
    }

    public function getTableActions(): array
    {
        return [
            \Filament\Tables\Actions\EditAction::make(),
            \Filament\Tables\Actions\DeleteAction::make(),
        ];
    }
}
