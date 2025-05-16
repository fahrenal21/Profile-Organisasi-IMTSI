<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationLabel = 'Gallery';
    protected static ?string $navigationIcon = 'heroicon-o-camera';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->maxSize(5120), // 5 MB max size

                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Terbaru' => 'Terbaru',
                        'kongres-1' => 'Kongres 1',
                        'kongres-2' => 'Kongres 2',
                        'kongres-3' => 'Kongres 3',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Gambar')->width(100),
                TextColumn::make('title')->label('Judul'),
                TextColumn::make('category')->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                ->label('Lihat')
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGallery::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function getRoutePrefix(): string
    {
        return 'Gallery'; // Set your desired singular route prefix
    }
}
