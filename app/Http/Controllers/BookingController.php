<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name_customer' => 'required|max:255',
            'phone_customer' => 'required',
            'judul_booking' => 'required|max:255',
            'detail' => 'required|max:255',
            'harga' => 'required',
            'dateline' => 'required|date',
            'referensi_file' => 'nullable|file|image|max:10240',
            'referensi_link' => 'nullable|active_url'
        ]);

        // dd($validatedData);
        if ($request->file('referensi_file')) {

            $validatedData['referensi_file'] = $request->file('referensi_file')->store('referensi_file');
        }

        $request->user()->bookings()->create($validatedData);
        return redirect('/booking/show')->with('success', 'booking berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('booking.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
