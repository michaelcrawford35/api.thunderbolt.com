<?php

namespace App\Http\Controllers;

use App\Responses\ThunderboltResponse;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        return new ThunderboltResponse(Location::findOrFail($id)->items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
