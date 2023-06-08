<?php

namespace App\Http\Controllers;

use App\Models\Protagonista;
use Illuminate\Http\Request;

class ProtagonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protagonistas=Protagonista::all();
        return view("protagonistas.index",compact("protagonistas"));
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
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function show(Protagonista $protagonista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function edit(Protagonista $protagonista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Protagonista $protagonista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protagonista $protagonista)
    {
        //
    }
}
