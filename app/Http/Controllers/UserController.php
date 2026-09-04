<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class UserController extends Controller
{
     public function index(){
        $reservations = Reservation::where('user_id',auth()->id())->get();
        return view('user.index', compact('reservations'));
    }
}
