<?php

namespace App\Filament\Resources\Admissions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('course_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
