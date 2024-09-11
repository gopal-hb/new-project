<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $location=location::where('is_deleted',0)->get();
        return view('admin.Location',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'location' => 'required|max:255',
        ]);
        $add = new location();
        $add->location = $request->location;
        $add->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'elocation' => 'required|max:255',
        ]);
        $edit = location::find($id);
        $edit->location= $request->elocation;
        $edit->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete =location::find($id);
        $delete->is_deleted = 1;
        $delete->save();
        return redirect()->back();
    }
}
