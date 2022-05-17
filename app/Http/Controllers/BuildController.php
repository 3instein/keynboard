<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Layout;
use App\Models\TopCase;
use App\Models\BottomCase;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    private $top_cases;
    private $bottom_cases;
    private $layouts;
    
    public function __construct(){
        $this->top_cases = TopCase::all();
        $this->bottom_cases = BottomCase::all();
        $this->layouts = Layout::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('build_code')){

        }

        return view('build.index', [
            'top_cases' => $this->top_cases,
            'bottom_cases' => $this->bottom_cases,
            'layouts' => $this->layouts
        ]);
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
        // $top_case = TopCase::find($request->top_case);
        // $bottom_case = BottomCase::find($request->bottom_case);
        // $layout = Layout::find($request->layout);

        // $code = $layout->code . $top_case->code . $bottom_case->code;

        // return Build::create([
        //     'code' => $code,
        //     'top_case_id' => $top_case->id,
        //     'bottom_case_id' => $bottom_case->id,
        //     'layout_id' => $layout->id
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function show(Build $build)
    {
        return view('build', [
            'build' => $build
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function edit(Build $build)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Build $build)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function destroy(Build $build)
    {
        //
    }

    /**
     * Load the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function load(Request $request){
        return view('build.index', [
            'build' => Build::where('code', $request->input('build-code'))->first(),
            'top_cases' => $this->top_cases,
            'bottom_cases' => $this->bottom_cases,
            'layouts' => $this->layouts
        ]);
    }
}
