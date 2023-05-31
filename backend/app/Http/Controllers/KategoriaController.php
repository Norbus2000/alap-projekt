<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osszesTeszt = kategoria::all();
        return $osszesTeszt;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function show(kategoria $kategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoria $kategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoria $kategoria)
    {
        //
    }
}
