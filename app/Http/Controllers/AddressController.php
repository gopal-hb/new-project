<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $address = address::where('is_deleted',0)->get();

        return view('admin.address',compact('address'));
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
            'address' => 'required|max:255',
        ]);
        $add = new address();
        $add->address= $request->address;
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
        //
        $validated = $request->validate([
            'eaddress' => 'required|max:255',
        ]);
        $edit = address::find($id);
        $edit->address= $request->eaddress;
        $edit->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $del = address::find($id);
        $del->is_deleted = 1;
        $del->save();
        return redirect()->back();
    }
}
