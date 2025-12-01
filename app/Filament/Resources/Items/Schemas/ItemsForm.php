<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Support\RawJs;
use Filament\Schemas\Schema;
use GuzzleHttp\Psr7\UploadedFile;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;

class ItemsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                Textarea::make('deskripsi')
                    ->required()
                    ->rows(3),
                TextInput::make('harga')
                    ->required()
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->suffix('IDR')
                    ->numeric(),
                TextInput::make('stok')
                    ->required()
                    ->numeric(),
                FileUpload::make('img_url')
                    ->label("Gambar Item")
                    ->image()
                    ->imageEditor(),
                ]);
    }
}
