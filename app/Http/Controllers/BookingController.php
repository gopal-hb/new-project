<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\BookingConfirmation;
use App\Models\booking;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    //

    public function show()
    {
        $bookings = DB::table('bookings')
            ->join('events', 'bookings.event_id', '=', 'events.id')
            ->select('bookings.*', 'events.name as event_name')
            ->get();

        return view('admin.booking', compact('bookings'));
    }

    public function frontshow()
    {
        $bookings = DB::table('events')
            ->join('categories', 'events.category_id', '=', 'categories.id')
            ->join('locations', 'events.location_id', '=', 'locations.id')
            ->join('addresses', 'events.address_id', '=', 'addresses.id')
            ->select('categories.category', 'categories.id as categoryid', 'locations.location', 'locations.id as locationid', 'addresses.id as addressid', 'addresses.address', 'events.id', 'events.time', 'events.date', 'events.description', 'events.status', 'events.name')
            ->where('events.status', 0)
            ->where('events.is_deleted', 0)->get();
        return view('front.booking', compact('bookings'));
    }

    public function booknow(Request $request)
    {

        $validate = $request->validate([

            'eventid' => 'required',
            'eventname' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'num_people' => 'required',
            'massage' => 'required',
        ]);


        $booking = new booking();
        $booking->event_id = $request->eventid;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->num_people = $request->num_people;
        $booking->massage = $request->massage;
        $booking->save();

        $data = DB::table('events')
            ->join('categories', 'events.category_id', '=', 'categories.id')
            ->join('locations', 'events.location_id', '=', 'locations.id')
            ->join('addresses', 'events.address_id', '=', 'addresses.id')
            ->select('categories.category', 'categories.id as categoryid', 'locations.location', 'locations.id as locationid', 'addresses.id as addressid', 'addresses.address', 'events.id', 'events.time', 'events.date', 'events.description', 'events.status', 'events.name')
            ->where('events.id', $request->eventid)
            ->where('events.is_deleted', 0)->first();

        //write mail code to send email booking details

        Mail::to($booking->email)->send(new BookingConfirmation($booking, $data));

        return redirect()->back();
    }

    public function confirm($id)
    {
        $booking = booking::find($id);
        $booking->status = 1;
        $booking->save();
        return view('front.confirm', compact('booking'));
    }
}