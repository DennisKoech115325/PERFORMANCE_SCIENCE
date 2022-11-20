<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Statistics;
use Illuminate\Support\Facades\Http;
class PredictionController extends Controller
{
    public function prediction(Request $request){
        $var2 = $request->input('receiver');
        $user = User::find($var2);
        $response = Http::get('http://127.0.0.1:5000/prediction', [
            'reason' => 'home',
            'internet'=>'no',
            'freetime'=>'3',
            'health'=>'4',
            'studytime'=>'2',
            'G1'=>'12',
            'failures'=>'0',
            'G2'=>'12',
            'goout'=>'3',
            'traveltime'=>'1',
            'absences'=>'0'
        ]);
        return $response->body();
    }
}
