<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\User;
use App\Models\Waiter;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservations',[
            'reservations' => Reservation:: all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation_create',[
            'tables' => Table::all(),
            'users' => User::all(),
            'waiters' => Waiter::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'table_id' => 'required|integer',
            'user_id' => 'required|integer',
            'waiter_id' => 'required|integer',
            'dateandtime' => 'required'
        ]);
        $reservation = new Reservation($validated);
        $reservation->save();
        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('reservation', [
            'reservation' => Reservation::all()->where('id', $id)->first()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('reservation_edit', [
            'reservation' => Reservation::all()->where('id', $id)->first(),
            'tables' => Table::all(),
            'users' => User::all(),
            'waiters' => Waiter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'table_id' => 'required',
            'user_id' => 'required',
            'waiter_id' => 'required',
            'dateandtime' => 'required'
        ]);
        $reservation = Reservation::all()->where('id', $id)->first();
        $reservation->table_id = $validated['table_id'];
        $reservation->user_id = $validated['user_id'];
        $reservation->waiter_id = $validated['waiter_id'];
        $reservation->dateandtime = $validated['dateandtime'];
        $reservation->save();
        return redirect('/reservation')->withErrors([
            'success' => 'Запись '. $id . ' успешно изменена!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reservation::destroy($id);
        return redirect('/reservation')->withErrors([
            'success' => 'Запись '. $id . ' успешно удалена!'
        ]);
    }
}
