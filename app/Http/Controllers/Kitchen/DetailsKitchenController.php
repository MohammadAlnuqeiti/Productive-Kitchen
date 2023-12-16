<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use App\Http\Requests\KitchenDetailsRequest;
use Illuminate\Http\Request;

class DetailsKitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all kitchen details associated with the currently authenticated user
        $kitchenId = Auth()->user()->id;
        $kitchenDetails = Kitchen_Details::where('user_id', $kitchenId)->get();

        // Return the view with the kitchen details data
        return view('kitchenDashboard.details.index', compact('kitchenDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KitchenDetailsRequest $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // Find the kitchen detail record with the given ID
        $kitchenDetail = Kitchen_Details::findOrFail($id);

        // Return the view with the kitchen detail data
        return view('kitchenDashboard.details.show', compact('kitchenDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get the authenticated user's kitchen ID
        $kitchen_id = Auth()->user()->id;

        // Find the kitchen details record based on the given ID and kitchen ID
        $kitchenDetails = Kitchen_Details::where('user_id', $kitchen_id)
                                        ->where('id', $id)
                                        ->firstOrFail();

        // Return the edit view with the kitchen details data
        return view('kitchenDashboard.details.edit', compact('kitchenDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Get the authenticated user's kitchen ID
    $kitchen_id = Auth()->user()->id;

    // Find the kitchen details record based on the given ID and kitchen ID
    $kitchenDetails = Kitchen_Details::where('user_id', $kitchen_id)
                                      ->where('id', $id)
                                      ->firstOrFail();

    // Update the values of the kitchen details record with the new values from the request
    $kitchenDetails->update([
        'short_description' => $request->short_description,
        'long_description' => $request->long_description,
        // Update the image if a new one was uploaded
        'image' => $request->hasFile('image') ? $request->file('image')->store('kitchen_images', 'public') : $kitchenDetails->image,
    ]);

    // Redirect the user to the index page to display the updated kitchen details
    return redirect()->route('kitchen.details.index')->with('success2', 'Kitchen details updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
