<?php

namespace App\Filament\Resources\PengurusResource\Pages;

use App\Filament\Resources\PengurusResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePengurus extends CreateRecord
{
    protected static string $resource = PengurusResource::class;

    // Optional: Customize the form schema or add specific validations if needed
    // The form will automatically use the form method defined in PengurusResource.php
}
