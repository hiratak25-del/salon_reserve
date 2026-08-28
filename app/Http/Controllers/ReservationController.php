<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Staff;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
      $reservations = Reservation::all();
        return view('reservation.index',compact('reservations'));
    }
}
