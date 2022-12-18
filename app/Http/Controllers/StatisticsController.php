<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    //THE VALIDATOR, HE WHO SCRUMPT WHEN HE GOT HIS D SUCCD
    //He scrumpt his last
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
        $user = User::find(auth()->user()->id);
        $this->validate($request,[
            'absences'=>'required|min:0|max:93',
            'G1'=>'required|min:0|max:20',
            'G2'=>'required|min:0|max:20',
        ]);
        $statistic = new Statistics();
        $statistic->title = $request->input('title');
        $statistic->about = $request->input('about');
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
        return view('users.show')->with('user',$user)->with('statistics',$user->statistics)->with('success','Statistic Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statistic = Statistics::find($id);
        return view('statistics.show')->with('statistic',$statistic)->with('user',$statistic->user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statistic = Statistics::find($id);
        //Check for Correct user
        if(auth()->user()->id !== $statistic->user_id){
            return redirect('/home')->with('danger','Unauthorized Page');
        }else{
            return view('statistics.edit')->with('stat',$statistic);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(auth()->user()->id);
        $this->validate($request,[
            'absences'=>'required|min:0|max:93',
            'G1'=>'required|min:0|max:20',
            'G2'=>'required|min:0|max:20',
        ]);
        $statistic = Statistics::find($id);
        $statistic->title = $request->input('title');
        $statistic->about = $request->input('about');
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
        return view('statistics.show')->with('statistic',$statistic)->with('user',$statistic->user)->with('success','Statistic Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        $statistic = Statistics::find($id);
        $statistic->delete();
        return view('users.show')->with('user',$user)->with('statistics',$user->statistics)->with('success','Statistic Deleted.');
    }
}
