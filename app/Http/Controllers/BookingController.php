<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if(isset($request->customer_id) && $request->customer_id !== 0)
            $bookings = \App\Models\Booking::where('customer_id', $request->customer_id)->orderBy('make')->get();
        else
            $bookings = \App\Models\Booking::orderBy('make')->get();
            $customer = \App\Models\Customer::orderBy('surname')->get();
        return view('bookings.index', ['bookings' => $bookings, 'customers' => $customer]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $customers = \App\Models\Customer::orderBy('surname')->get();
        return view('bookings.create', ['customers' => $customers]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $booking = new Booking();
        $booking->fill($request->all());
        $booking->save();
        return redirect()->route('bookings.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking){
        $customers = \App\Models\Customer::orderBy('surname')->get();
        return view('bookings.edit', ['booking' => $booking, 'customers' => $customers]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking){
        $booking->fill($request->all());
        $booking->save();
        return redirect()->route('bookings.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking, Request $request)
    {
        $booking->delete();
        return redirect()->route('bookings.index', ['customer_id'=> $request->input('customer_id')]);
    }

}
