<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;
use App\Candidatem;
use App\Website;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin', ['except' => ['index', 'login']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect(route('admindashboard'));
        }else{
            return redirect(route('adminlogin'))->with('message', 'Wrong username or password');
        }
    }

    public function dashboard(){
        $label = Candidatem::all()->pluck('nama');

        $vote = Candidatem::all()->pluck('total_vote');
        return view('admin.dashboard', ['label' => $label, 'vote' => $vote]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $update = Admin::first()->update([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if ($update) {
            return redirect('admin/profile')->with('notif', 'Data admin updated successfully!');
        } else {
            return redirect('admin/profile')->with('error', 'Error!');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect(route('adminlogin'));
    }

    public function webman(){
        $website = Website::first();
        return view('admin.wm', ['website' => $website]);
    }

    public function submitwebman(Request $request){
        $request->validate([
            'title' => 'required',
            'tagline' => 'required',
        ]);
        Website::first()->update([
            'title' => $request->title,
            'tagline' => $request->tagline,
        ]);

        return redirect('/admin/websiteManagement')->with('success', 'Edited Successfully');
    }

    public function profile()
    {
        $data = Admin::first();

        return view('admin.profile', ['admin' => $data]);
    }
}
