<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Statistics;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where([
            ['name','!=',Null],
            [function ($query) use ($request){
                if (($term = $request->search)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy("id","desc")
        ->paginate(10);
        return view('users.index', compact('users'))->with('i', (request()->input('page', 1)-1)*5);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        // dd($user->events);
        $err_message = 'The has been banned!';
        $err_message1 = 'The user does not exist!';
        if($user != null){
            if($user->deleted_at == null){
                return view('users.show')->with('user',$user)->with('statistics',$user->statistics);
            }else{
                return view('index')->with('danger',$err_message);
            }
        }else{
            return view('index')->with('danger',$err_message1);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        if(auth()->user()->id !== $users->id){
            return redirect('/users/'.auth()->user()->id)->with('danger','You Do Not Have Permission To Edit This Page');
        }else{
            return view('users.edit')->with('users',$users);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'nullable|sometimes|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        $user=User::find($id);
        $user -> name = $request->input('name');
        $user -> email = $request->input('email');
        $user->save();
        return redirect('/users/'.$user->id)->with('success','User Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
