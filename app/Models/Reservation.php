<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'staff_id',
        'menu_id',
        'reservation_date',
        'start_time',
        'end_time',
        'status',
        'response',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

