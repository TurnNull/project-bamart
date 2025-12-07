<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Items::create([
            'user_id' => 1,
            'nama' => 'Test',
            'slug' => 'produk-1',
            'deskripsi' => 'Deskripsi untuk produk contoh 1.',
            'harga' => 100000.00,
            'stok' => 50,
            'img_url' => null,
        ]);

        Items::create([
            'user_id' => 2,
            'nama' => 'Laptop Gamink',
            'slug' => 'laptop-gamink',
            'deskripsi' => 'Deskripsi untuk produk contoh 2.',
            'harga' => 14000000.00,
            'stok' => 2,
            'img_url' => "test.png",
        ]);
    }
}
