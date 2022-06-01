<?php

namespace App\Http\Controllers;

use App\Models\InterestCheck;
use Illuminate\Http\Request;

class InterestCheckController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('interest-check.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return $request;
        // $validatedData = $request->validate([
        //     'community' => ['required'],
        //     'username' => ['required', 'max:255'],
        //     'layout' => ['required'],
        //     'color' => ['required'],
        //     'plate' => ['required'],
        //     'bottom-row' => ['required'],
        // ]);

        // if($request->input('community') == 'discord'){
        //     $username = $request->input('username').'#'.$request->input('id');
        // } else if($request->input('community') == 'instagram') {
        //     $username = '@'.$request->input('username');
        // }
        
        // $responses = json_encode([
        //     'layout' => $request->input('layout'),
        //     'preferred_colors' => $request->input('color'),
        //     'preferred_plate' => $request->input('plate'),
        //     'bottom_row' => $request->input('bottom-row')
        // ]);

        // $interestCheck = [
        //     'community' => $request->input('community'),
        //     'username' => $username,
        //     'responses' => $responses
        // ];

        // InterestCheck::create($interestCheck);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InterestCheck  $interestCheck
     * @return \Illuminate\Http\Response
     */
    public function show(InterestCheck $interestCheck) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InterestCheck  $interestCheck
     * @return \Illuminate\Http\Response
     */
    public function edit(InterestCheck $interestCheck) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InterestCheck  $interestCheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InterestCheck $interestCheck) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InterestCheck  $interestCheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(InterestCheck $interestCheck) {
        //
    }
}
