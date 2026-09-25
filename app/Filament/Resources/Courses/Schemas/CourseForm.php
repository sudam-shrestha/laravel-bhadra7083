<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Course Data")
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('Rs.'),
                        RichEditor::make('description')
                            ->default(null)
                            ->columnSpanFull(),
                    ])->columnSpanFull()->columns(2)
            ]);
    }
}
