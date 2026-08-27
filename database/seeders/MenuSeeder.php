<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'カット',
            'description' => 'シャンプー・ブロー込み',
            'price' => 5000,
            'duration' => 60,
        ]);
        Menu::create([
            'name' => 'カラー',
            'description' => 'シャンプー・ブロー込み',
            'price' => 8000,
            'duration' => 120,
        ]);
        Menu::create([
            'name' => 'パーマ',
            'description' => 'シャンプー・ブロー込み',
            'price' => 9000,
            'duration' => 100,
        ]);
    }
}
