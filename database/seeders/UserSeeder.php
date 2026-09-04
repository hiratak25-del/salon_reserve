<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => '一般ユーザー',
            'email' => 'yyy@yyy.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
               User::create([
            'name' => 'スタッフ',
            'email' => 'sss@sss.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);
               User::create([
            'name' => '管理者',
            'email' => 'kkk@kkk.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
