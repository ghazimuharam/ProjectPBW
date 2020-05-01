<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\userm;

class userController extends Controller
{
    public function userM() {
        $data = userm::all();
    	return view('admin.um', ['data' => $data]);
    }

    public function tambahUserM(Request $request) {
        $this->validate($request,[
    		'nama' => 'required',
    		'role' => 'required',
    		'status' => 'required'
        ]);
        userm::create([
            'nama' => $request -> nama,
    		'role' => $request -> role,
    		'status' => $request -> status
        ]);
        return redirect('/admin/userManagement');
    }

    public function ubahUserM($id) {
        $data = userm::find($id);
        return view('admin.editum', ['data' => $data]);
    }

    public function submitUserM($id, Request $request) {
        $this->validate($request,[
            'nama' => 'required',
            'role' => 'required',
    		'status' => 'required'
         ]);

         $data = userm::find($id);
         $data->nama = $request->nama;
         $data->role = $request->role;
         $data->status = $request->status;
         $data->save();
         return redirect('/admin/userManagement');
    }

    public function hapusUserM($id) {
        $data = userm::find($id);
        $data->delete();
        return redirect('/admin/userManagement');
    }

    public function cari(Request $data) {
        $nama = $data -> cari;
        $data = DB::table('userms') -> where('nama', 'like', "%".$nama."%") -> get();
        return view('admin.um', ['data' => $data]);
    }
}
