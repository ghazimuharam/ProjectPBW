<?php

namespace App\Http\Controllers;

use App\Candidatem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class VoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['index']);
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
        if($user != null && $user->count() == 1 && Auth::loginUsingId($user->id)){
            return redirect()->intended('/vote/dashboard');
        }else{
            return redirect('/vote/login')->with('status', 'Uniquecode not found or already used');
        }
    }

<<<<<<< HEAD
    public function create($id){
      
=======
    public function useVote($id){
        $candidate = Candidatem::findorfail($id);
        $candidate->update(
            ['total_vote' => $candidate->total_vote + 1]
        );
        $user = Auth::user();
        $user->update(
            ['status' => 'deactive']
        );
        return redirect(route('login'))->with('message', 'Pemilihan Berhasil');
>>>>>>> parent of 9a84b1f... Add Seeders, modify login view, update VoteController
    }

}
