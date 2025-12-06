<?php

namespace App\Filament\Resources\Items\Schemas;

use Carbon\Carbon;
use App\Models\Items;
use Cron\DayOfWeekField;
use Filament\Support\RawJs;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;

class ItemsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug(($state ?? '') . '-' . Carbon::now()->format('d:s'))))
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disabled()
                    ->dehydrated(),
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
                    ->maxSize(3072)
                    ->imageEditor()
                    // ->directory("")
                    ->before(function (Items $items) {
                        if ($items->img_url) {
                            Storage::disk('public')->delete($items->img_url);
                        }
                    }),
            ]);
    }
}
