<?php

namespace App\Http\Controllers;

use App\Models\Pcb;
use App\Http\Requests\StorePcbRequest;
use App\Http\Requests\UpdatePcbRequest;

class PcbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePcbRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePcbRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pcb  $pcb
     * @return \Illuminate\Http\Response
     */
    public function show(Pcb $pcb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pcb  $pcb
     * @return \Illuminate\Http\Response
     */
    public function edit(Pcb $pcb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePcbRequest  $request
     * @param  \App\Models\Pcb  $pcb
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePcbRequest $request, Pcb $pcb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pcb  $pcb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pcb $pcb)
    {
        //
    }
}
