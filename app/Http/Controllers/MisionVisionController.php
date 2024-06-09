<?php

namespace App\Http\Controllers;

use App\Models\Mision_Vision;
use Illuminate\Http\Request;
use Illuminate\Routing\ViewController;

class MisionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mision_vision = Mision_Vision::all();
        return view("admin.mision_vision.index", compact("mision_vision"));
        
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Mision_Vision $mision_Vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mision_Vision $mision_Vision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mision_Vision $mision_Vision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mision_Vision $mision_Vision)
    {
        //
    }
}
