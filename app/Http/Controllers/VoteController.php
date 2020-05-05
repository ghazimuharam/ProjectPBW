<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Candidatem;
class VoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['showLogin', 'login', 'destroy']]);
    }

    public function index(){
        $candidate = Candidatem::all();
        return view('vote.dashboard', compact('candidate'));
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
        if($user != null && Auth::loginUsingId($user->id)){
            return redirect()->intended('/vote/dashboard');
        }else{
            return redirect('/vote/login')->with('status', 'Uniquecode not found or already used');
        }
    }

    public function useVote($id){
        $user = Auth::user();
        if($user->status == 'active'){
          $candidate = Candidatem::findorfail($id);
          $candidate->update(
              ['total_vote' => $candidate->total_vote + 1]
          );
          $user->update(
              ['status' => 'deactive']
          );
          return redirect(route('login'))->with('message', 'Pemilihan Berhasil');
        }else{
          return redirect('/vote/login')->with('status', 'You dont meet the requirements to vote'); 
        }
    }

    public function destroy(){
        Auth::logout();
        return redirect(route('login'));
    }
}
