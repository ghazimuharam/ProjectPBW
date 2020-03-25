<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class VoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['index']);
    }

    public function index(){
        return 'asdasdsa';
    }

    public function showLogin(){
        return view('vote.login');
    }

    public function login(Request $request){
        $request->validate([
            'uniquecode' => 'required',
        ]);

        $user = User::where('uniquecode',$request->uniquecode)
                    ->where('status','active')->first();
        if($user != null && $user->count() == 1 && Auth::loginUsingId($user->id)){
            return redirect()->intended('/vote/dashboard');
        }else{
            return redirect('/vote/login')->with('status', 'Uniquecode not found or already used');
        }
    }

}
