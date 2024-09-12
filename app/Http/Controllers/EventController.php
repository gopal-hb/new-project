<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Models\category;
use App\Models\event;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function event()
    {
        $event = DB::table('events')
            ->join('categories', 'events.category_id', '=', 'categories.id')
            ->join('locations', 'events.location_id', '=', 'locations.id')
            ->join('addresses', 'events.address_id', '=', 'addresses.id')
            ->select('categories.category', 'categories.id as categoryid', 'locations.location', 'locations.id as locationid', 'addresses.id as addressid', 'addresses.address', 'events.id', 'events.time', 'events.date', 'events.description', 'events.status', 'events.name')
            ->where('events.is_deleted', 0)->get();
        $category = category::where('is_deleted', 0)->get();
        $location = location::where('is_deleted', 0)->get();
        $address = address::where('is_deleted', 0)->get();
        return view('admin.event', compact('event', 'category', 'location', 'address'));
    }

    public function eventop(Request $request)
    {
        $vaildate = $request->validate(
            [
                'name' => 'required',
                'Description' => 'required',
                'Category' => 'required',
                'Location' => 'required',
                'Address' => 'required',
                'date' => 'required',
                'time' => 'required',
                'status' => 'required',

            ]
        );
        $status = $request->status;
        $event = new event();
        $event->name = $request->name;
        $event->description = $request->Description;
        $event->category_id = $request->Category;
        $event->location_id = $request->Location;
        $event->address_id = $request->Address;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->status = $status;
        $event->save();
        return redirect()->back();
    }

    public function editeventop(Request $request)
    {
        $vaildate = $request->validate(
            [
                'ename' => 'required',
                'eDescription' => 'required',
                'eCategory' => 'required',
                'eLocation' => 'required',
                'eAddress' => 'required',
                'edate' => 'required',
                'etime' => 'required',
                'estatus' => 'required',
            ]
        );

        $event = event::find($request->eventid);
        $event->name = $request->ename;
        $event->description = $request->eDescription;
        $event->category_id = $request->eCategory;
        $event->location_id = $request->eLocation;
        $event->address_id = $request->eAddress;
        $event->date = $request->edate;
        $event->time = $request->etime;
        $event->status = $request->estatus;
        $event->save();
        return redirect()->back();
    }
    public function eventstatus(Request $request)
    {
        $statusnew = $request->status == 0 ? 1 : 0;
        $event = event::find($request->id);
        $event->status = $statusnew;
        $event->save();
        return redirect()->back();
    }

    public function eventdelete(Request $request)
    {
        $event = event::find($request->id);
        $event->is_deleted = 1;
        $event->save();
        return redirect()->back();
    }
}