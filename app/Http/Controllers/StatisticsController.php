<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = Statistics::orderBy('created_at','desc')->simplePaginate(10);
        return view('statistics.index')->with('statistics',$statistics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'absences'=>'required|min:0|max:93',
            'G1'=>'required|min:0|max:20',
            'G2'=>'required|min:0|max:20',
        ]);
        $statistic = new Statistics();
        $statistic->reason = $request->input('reason');
        $statistic->internet = $request->input('internet');
        $statistic->user_id = auth()->user()->id;
        $statistic->traveltime = $request->input('traveltime');
        $statistic->studytime = $request->input('studytime');
        $statistic->freetime = $request->input('freetime');
        $statistic->failures = $request->input('failures');
        $statistic->goout = $request->input('goout');
        $statistic->health = $request->input('health');
        $statistic->absences = $request->input('absences');
        $statistic->G1 = $request->input('G1');
        $statistic->G2 = $request->input('G2');
        $statistic->save();
        return back()->with('success','Statistic Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistics $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistics $statistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
