<?php

namespace App\Http\Controllers;

use App\Responses\ThunderboltResponse;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        return new ThunderboltResponse(Item::findOrFail($id)->locations);
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
