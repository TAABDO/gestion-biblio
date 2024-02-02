<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    //
    public function index()
    {
        $reservations = Reservation::All();
        return view('Admin_dash.reservations.reservation',['reservations'=> $reservations]);
    }

    public function create()
    {
        return view('Admin_dash.reservations.reservation');
    }

    public function store(Request $request)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
