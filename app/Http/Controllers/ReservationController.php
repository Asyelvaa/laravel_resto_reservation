<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.all', [
            "title" => "Reservations List",
            "reservations" => Reservation::all()
        ]);
    }
}
