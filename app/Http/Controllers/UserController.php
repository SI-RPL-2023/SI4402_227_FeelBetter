<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile(){
        $infoProfile = Patient::where('email', Auth::user()->email)->first();
        $umur = null;
        if(!empty($infoProfile->tanggal_lahir)) {
            $tanggal_lahir = $infoProfile->tanggal_lahir;
            $tanggal_sekarang = date('Y-m-d');
            $diff = date_diff(date_create($tanggal_lahir), date_create($tanggal_sekarang));
            $umur = $diff->y;
        }
return view('pages.front-end.profile', compact('infoProfile', 'umur'));
    }
    public function verifikasiProfile(Request $request){
        // upload foto KTP
        $ekstensiKTP = $request->file('foto_ktp')->clientExtension();
        $fileFotoKTP = Auth::user()->name.'-'.now()->timestamp.'-'.'KTP'.'.'.$ekstensiKTP;
        $request->file('foto_ktp')->storeAs('images', $fileFotoKTP);
        $request['foto_ktp'] = $fileFotoKTP;

        // insert database
        $verificationProfile = Patient::create([
            'nama_lengkap' => Auth::user()->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'NIK' => 'mohon tunggu validasi dari pihak admin',
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telpon' => Auth::user()->phone_number,
            'email' => Auth::user()->email,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'foto_ktp' => $fileFotoKTP,
        ]);
        if($verificationProfile){
            Session::flash('status', 'success');
            Session::flash('message', 'Proses Verifikasi/update berhasil diakukan');
            return redirect('/profil');
        } else {
            Session::flash('status', 'failed');
            Session::flash('message', 'Proses Verifikasi/update gagal diakukan');
            return redirect('/profil');
        }
    }
    public function updateProfile(Request $request){
        $updateProfile = Patient::where('email', Auth::user()->email)->first();
        // insert database
        $updateProfile->update($request->except('_token'));
        if($updateProfile){
            Session::flash('status', 'success');
            Session::flash('message', 'Proses Verifikasi/update berhasil diakukan');
            return redirect('/profil');
        } else {
            Session::flash('status', 'failed');
            Session::flash('message', 'Proses Verifikasi/update gagal diakukan');
            return redirect('/profil');
        }
    }
}
