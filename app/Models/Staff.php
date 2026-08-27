<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'email',
        'description',
        'image',
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
