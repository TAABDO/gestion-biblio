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
        return view('Admin_dash.reservations.createreservation');
    }

    public function store(Request $request)
    {
        $data= $request->validate([

            'description'=>'required',
            'reservation_date'=>'required|date',
            'reservation_date'=>'required|date',
        ]);

        $newbook = Reservation::create($data);
        return redirect()->route('reservations');
    }
    public function edit(Reservation $reservation )
    {
        return view('Admin_dash.books.updateReservation',['book'=>$book]);

    }
    public function update(Request $request,Reservation $reservations)
    {
        $data= $request->validate([

            'description'=>'required',
            'reservation_date'=>'required|date',
            'reservation_date'=>'required|date',
        ]);

        $reservations->update($data);
        return redirect()->route('reservations');
    }
    public function destroy(Reservation $reservations)
    {
        $reservations->delete();

    // Retrieve all books after deleting the book
    $reservations = Reservations::all();

    return redirect()->route('reservations');
    }

    public function getAllfordashboard(){

        $reservations = Reservation::all();
        return view('Admin_dash.dashboard',['reservations' => $reservations]);

 }
}
