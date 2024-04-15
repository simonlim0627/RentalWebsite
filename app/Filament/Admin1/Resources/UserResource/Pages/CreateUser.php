<?php

namespace App\Filament\Admin1\Resources\UserResource\Pages;

use App\Filament\Admin1\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
