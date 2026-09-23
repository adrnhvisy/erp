<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Image\Image;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Information')
                    ->icon('heroicon-o-user')
                    ->columnSpan(2)
                    ->schema([
                        Group::make()
                            ->relationship('user')
                            ->schema([
                                TextInput::make('name')
                                    ->placeholder('Enter name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('email')
                                    ->placeholder('Enter email')
                                    ->required()
                                    ->email()
                                    ->maxLength(255),
                                TextInput::make('password')
                                    ->placeholder('Enter password')
                                    ->required()
                                    ->password()
                                    ->maxLength(255),  
                            ])
                    ]),
                    
                    Section::make('Image')
                    ->icon('heroicon-o-camera')
                    ->columnSpan(1)
                    ->schema([
                        Group::make()
                        ->relationship('employee')
                        ->schema([
                            ImageColumn::make('image')
                        ])
                    ])
                    
            ]);
    }
}
