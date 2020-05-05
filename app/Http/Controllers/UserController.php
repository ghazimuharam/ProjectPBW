<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function userM() {
        $data = User::all();
    	return view('admin.um', ['data' => $data]);
    }

    public function tambahUserM(Request $request) {
        $this->validate($request,[
    		'name' => 'required',
    		'uniquecode' => 'required',
    		'status' => 'required'
        ]);
        User::create([
            'name' => $request -> name,
    		'uniquecode' => $request -> uniquecode,
    		'status' => $request -> status
        ]);
        return redirect('/admin/userManagement');
    }

    public function ubahUserM($id) {
        $data = User::find($id);
        return view('admin.editum', ['data' => $data]);
    }

    public function submitUserM($id, Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'uniquecode' => 'required',
    		'status' => 'required'
         ]);

         $data = User::find($id);
         $data->name = $request->name;
         $data->uniquecode = $request->uniquecode;
         $data->status = $request->status;
         $data->save();
         return redirect('/admin/userManagement');
    }

    public function hapusUserM($id) {
        $data = User::find($id);
        $data->delete();
        return redirect('/admin/userManagement');
    }

    public function cari(Request $data) {
        $name = $data -> cari;
        $data = DB::table('users') -> where('name', 'like', "%".$name."%") -> get();
        return view('admin.um', ['data' => $data]);
    }
}
