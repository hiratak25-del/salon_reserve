<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Staff;
use App\Models\Menu;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index', compact('reservations'));
    }

    public function create()
    {
        $staffs = Staff::all();
        $menus = Menu::all();

        return view('reservation.create', compact('staffs', 'menus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'staff_id' => 'required',
            'menu_id' => 'required',
            'reservation_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required',
        ]);

        Reservation::create([
            'user_id' => auth()->id(),
            ...$validated,
        ]);

        return redirect()->route('reservation.index');
    }
}
