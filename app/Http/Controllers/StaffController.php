<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class StaffController extends Controller
{
    public function index(){
        $reservations = Reservation::where('staff_id',auth()->id())->get();

        return view('staff.index',compact('reservations'));
    }
}
