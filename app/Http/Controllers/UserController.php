<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function userM() {
        $data = User::all();
    	return view('admin.um', ['data' => $data]);
    }

    public function tambahUserM(Request $request) {
        $this->validate($request,[
            'uniquecode' => ['required','integer','between:1,1000','unique:users']
        ]);
        for ($i=0; $i < $request->uniquecode ; $i++){
            User::create([
                'uniquecode' => Str::random(8),
                'status' => 'active'
            ]);
        }
        return redirect('/admin/userManagement');
    }

    public function ubahUserM($id) {
        $data = User::find($id);
        return view('admin.editum', ['data' => $data]);
    }

    public function submitUserM($id, Request $request) {
        $this->validate($request,[
            'uniquecode' => ['required','between:1,1000']
         ]);

         $data = User::find($id);
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
        $data = DB::table('users') -> where('uniquecode', 'like', "%".$name."%") -> get();
        return view('admin.um', ['data' => $data]);
    }

    public function export() {
        $data = User::all();
		return view('admin.um',['data' => $data]);
    }

    public function export_excel() {
        return Excel::download(new UserExport, 'User.xlsx');
    }
}
