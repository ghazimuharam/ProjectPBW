<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Exports\CandidateExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Candidatem;

class CandidateController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function candidateM() {
        $data = Candidatem::all();
    	return view('admin.cm', ['data' => $data]);
    }

    public function tambahCandidateM(Request $request) {
        $this->validate($request,[
    		'nama' => 'required',
    		'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1000000',
    		'bio' => 'required'
        ]);
        $foto = $request -> file('foto');
        $nama_foto = $foto -> getClientOriginalName();
        $tujuan_upload = 'assets/img';
        $foto -> move($tujuan_upload, $nama_foto);
        Candidatem::create([
            'nama' => $request -> nama,
    		'foto' => $nama_foto,
            'bio' => $request -> bio,
            'total_vote' => 0,
        ]);
        return redirect('/admin/candidateManagement');
    }

    public function ubahCandidateM($id) {
        $data = Candidatem::find($id);
        return view('admin.editcm', ['data' => $data]);
    }

    public function submitCandidateM($id, Request $request) {
        $data = Candidatem::find($id);
        file::delete(public_path(). '/assets/img/'. $data -> foto);
        $this->validate($request,[
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1000000',
    		'bio' => 'required'
        ]);
        $foto = $request -> file('foto');
        $nama_foto = $foto -> getClientOriginalName();
        $tujuan_upload = 'assets/img';
        $foto -> move($tujuan_upload, $nama_foto);
        $data = Candidatem::find($id);
        $data->nama = $request->nama;
        $data->foto = $nama_foto;
        $data->bio = $request->bio;
        $data->save();
        return redirect('/admin/candidateManagement');
    }

    public function hapusCandidateM($id) {
        $data = Candidatem::find($id);
        file::delete(public_path(). '/assets/img/'. $data -> foto);
        $data->delete();
        return redirect('/admin/candidateManagement');
    }

    public function cari(Request $data) {
        $nama = $data -> cari;
        $data = DB::table('candidatems') -> where('nama', 'like', "%".$nama."%") -> get();
        return view('admin.cm', ['data' => $data]);
    }

    public function export() {
        $data = Candidatem::all();
		return view('admin.cm',['data' => $data]);
    }

    public function export_excel() {
        return Excel::download(new CandidateExport, 'Candidate.xlsx');
    }
}
