<?php

namespace App\Filament\Resources\Admissions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Admission Data")
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel()
                            ->required(),
                        Select::make("course_id")
                            ->searchable()
                            ->preload()
                            ->required()
                            ->relationship("course", "title"),
                    ])->columnSpanFull()->columns(2)    
            ]);
    }
}
