<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('slug')
                    ->label('Order ID')
                    ->copyable(),
                TextEntry::make('nama_lengkap')
                    ->label('Nama Customer'),
                TextEntry::make('email')
                    ->label('Email')
                    ->copyable(),
                TextEntry::make('telepon')
                    ->label('Telepon'),
                TextEntry::make('alamat_pengiriman')
                    ->label('Alamat Pengiriman')
                    ->columnSpanFull(),
                TextEntry::make('total_price')
                    ->label('Total Harga')
                    ->money('IDR'),
                TextEntry::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'primary' => 'processing',
                        'info' => 'shipped',
                        'success' => 'delivered',
                        'danger' => 'cancelled',
                    ]),
                TextEntry::make('created_at')
                    ->label('Tanggal Pesanan')
                    ->dateTime('d M Y, H:i'),
                TextEntry::make('updated_at')
                    ->label('Terakhir Diupdate')
                    ->dateTime('d M Y, H:i')
                    ->placeholder('-'),
            ]);
    }
}
