<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'user_id' => 1,
            'staff_id' => 1,
            'menu_id'=>1,
            'reservation_date'=>'2026-07-02',
            'start_time'=>'15:00',
            'end_time'=>'16:00',
            'status'=>'完了',
            'response'=>'特になし',
        ]);
    }
}
