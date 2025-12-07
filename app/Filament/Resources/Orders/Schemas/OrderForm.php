<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->label('Order ID')
                    ->disabled()
                    ->dehydrated(),
                TextInput::make('nama_lengkap')
                    ->label('Nama Customer')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('telepon')
                    ->label('Telepon')
                    ->tel()
                    ->required()
                    ->maxLength(20),
                Textarea::make('alamat_pengiriman')
                    ->label('Alamat Pengiriman')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('total_price')
                    ->label('Total Harga')
                    ->disabled()
                    ->dehydrated(false)
                    ->numeric()
                    ->prefix('Rp'),
                Select::make('status')
                    ->label('Status Pesanan')
                    ->options([
                        'pending' => 'Menunggu',
                        'processing' => 'Diproses',
                        'shipped' => 'Dikirim',
                        'delivered' => 'Selesai',
                        'cancelled' => 'Dibatalkan',
                    ])
                    ->default('pending')
                    ->required()
                    ->native(false),
            ]);
    }
}
