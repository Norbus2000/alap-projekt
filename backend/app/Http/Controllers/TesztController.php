<?php

namespace App\Http\Controllers;

use App\Models\teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tesztek = teszt::all();
        return $tesztek;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tesztKategoria($id)
    {
        $tesztKategoria =DB::select('select * from teszts where kategoriaId = ?', [$id]);
        return $tesztKategoria;
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
     * @param  \App\Models\teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function show(teszt $teszt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function edit(teszt $teszt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teszt $teszt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function destroy(teszt $teszt)
    {
        //
    }
}
