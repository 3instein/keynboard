<?php

namespace App\Http\Controllers;

use App\Models\Pcb;
use App\Models\User;
use App\Models\Build;
use App\Models\Order;
use App\Models\Plate;
use App\Models\Layout;
use App\Models\TopCase;
use App\Models\BottomCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $layout = Layout::find($request->input('layout'));
        $top_case = TopCase::find($request->input('top_case'));
        $bottom_case = BottomCase::find($request->input('bottom_case'));
        $plate = Plate::find($request->input('plate'));
        $pcb = Pcb::find($request->input('pcb'));

        $build_code = $layout->code .
            $top_case->code .
            $bottom_case->code .
            $plate->code .
            $pcb->code;

        return view('order.create', [
            'build_code' => $build_code,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $total = $request->input('total');
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);

        $build = Build::where('code', $request->input('build-code'))->first();

        $order = Order::create([
            'user_id' => $user->id,
            'build_id' => $build->id
        ]);

        return redirect()->route('order.invoice', $order);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order) {
        $order->delete();
        $order->user->delete();
        return redirect()->route('home');
    }

    public function invoice(Order $order) {
        return view('order.invoice', [
            'order' => $order
        ]);
    }

    /**
     * Track invoice of user
     * 
     * @param \Illuminate\Http\Request  $request
     * @return function invoice
     */
    public function track(Request $request) {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        return redirect()->route('order.invoice', $user->orders->first());
    }
}
