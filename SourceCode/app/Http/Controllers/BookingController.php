<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return Booking::all();
    }

    public function store(Request $request)
    {
        return Booking::create($request->all());
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return $booking;
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        return Booking::findOrFail($id);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return 204;
    }
}
