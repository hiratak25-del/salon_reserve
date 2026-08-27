<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name' => '田中 太郎',
            'email' => 'tanaka@example.com',
            'description' => '丁寧なカウンセリングを心がけています。',
        ]);
        Staff::create([
            'name' => '中田次郎',
            'email' => 'nakata@example.com',
            'description' => '丁寧なシャンプーを心がけています。',
        ]);
        Staff::create([
            'name' => '鈴木 三郎',
            'email' => 'suzuki@example.com',
            'description' => '丁寧なカウンセリングを心がけています。',
        ]);
    }
}
