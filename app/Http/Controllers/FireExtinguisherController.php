<?php

namespace App\Http\Controllers;

use App\Models\FireExtinguisher;
use Illuminate\Http\Request;

class FireExtinguisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fireExtinguishers = FireExtinguisher::all();
        return view('list', compact('fireExtinguishers'));
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
    public function store(Request $request)
    {
        FireExtinguisher::create([
            'establishmentsID' => $request->establishmentsID,
            'insideID' => $request->insideID,
            'place' => $request->place,
            'typeID' => $request->typeID,
            'serialNumber'=>$request->serialNumber,
            'productionDate'=>$request->productionDate,
            'comment'=>$request->comment
        ]);

        return ['message' => 'Létrehozva'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FireExtinguisher  $fireExtinguisher
     * @return \Illuminate\Http\Response
     */
    public function show(FireExtinguisher $fireExtinguisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FireExtinguisher  $fireExtinguisher
     * @return \Illuminate\Http\Response
     */
    public function edit(FireExtinguisher $fireExtinguisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FireExtinguisher  $fireExtinguisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FireExtinguisher $fireExtinguisher)
    {
        $fireExtinguisher->update([
            'establishmentsID' => $request->establishmentsID,
            'insideID' => $request->insideID,
            'place' => $request->place,
            'typeID' => $request->typeID,
            'serialNumber'=>$request->serialNumber,
            'productionDate'=>$request->productionDate,
            'comment'=>$request->comment
        ]);

        return ['message' => 'Módosítva'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FireExtinguisher  $fireExtinguisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(FireExtinguisher $fireExtinguisher)
    {
        $fireExtinguisher->delete();
    }
}
