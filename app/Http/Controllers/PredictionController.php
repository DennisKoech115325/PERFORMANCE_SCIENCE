<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    public function prediction(Request $request){
        $var2 = $request->input('receiver');
        $var = $request->input('initiator');
        $user_receiver = User::find($var2);
        $user_initiator = User::find($var);
        $statistic = Statistics::find($request->input('statistic'));
        /* $response = Http::get('http://127.0.0.1:5000/prediction', [
            'reason' => $statistic->reason,
            'internet'=> $statistic->internet,
            'freetime'=> $statistic->freetime,
            'health'=> $statistic->health,
            'studytime'=> $statistic->studytime,
            'G1'=> $statistic->G1,
            'failures'=> $statistic->failures,
            'G2'=> $statistic->G2,
            'goout'=> $statistic->goout,
            'traveltime'=> $statistic->traveltime,
            'absences'=> $statistic->absences
        ]); */
        // return view('prediction.show')->with('response',json_decode($response, true));
        // return view('prediction.show')->with('response',json_decode($response, true))->with('initiator',$user_initiator)->with('receiver',$user_receiver);
        return view('prediction.show')->with('initiator',$user_initiator)->with('receiver',$user_receiver);
        // return view('prediction.show')->with('response',$response);
    }
}
