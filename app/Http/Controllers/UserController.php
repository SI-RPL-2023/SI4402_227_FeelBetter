<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Patient;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile(){
        if(Auth::user()->role->name == 'Pasien'){
            $infoProfile = Patient::where('email', Auth::user()->email)->first();
            $umur = null;
        if(!empty($infoProfile->tanggal_lahir)) {
            $tanggal_lahir = $infoProfile->tanggal_lahir;
            $tanggal_sekarang = date('Y-m-d');
            $diff = date_diff(date_create($tanggal_lahir), date_create($tanggal_sekarang));
            $umur = $diff->y;
        }
            return view('pages.front-end.profile', compact('infoProfile', 'umur'));
        } else{
            $infoProfile = Therapist::where('email', Auth::user()->email)->first();
            $umur = null;
        if(!empty($infoProfile->tanggal_lahir)) {
            $tanggal_lahir = $infoProfile->tanggal_lahir;
            $tanggal_sekarang = date('Y-m-d');
            $diff = date_diff(date_create($tanggal_lahir), date_create($tanggal_sekarang));
            $umur = $diff->y;
        }
            return view('pages.front-end.profile', compact('infoProfile', 'umur'));
        }
    }
    public function verifikasiProfile(Request $request){
        if (Auth::user()->role->name == 'Pasien') {
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
        } else {
          // upload surat str
            $ekstensiSuratStr = $request->file('surat_str')->clientExtension();
            $fileFotoSuratStr = Auth::user()->name.'-'.now()->timestamp.'-'.'surat-str'.'.'.$ekstensiSuratStr;
            $request->file('surat_str')->storeAs('images', $fileFotoSuratStr);
            $request['surat_str'] = $fileFotoSuratStr;

            // insert database
            $verificationProfile = Therapist::create([
                'nama_lengkap' => Auth::user()->name,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nomor_str' => 'mohon tunggu validasi dari pihak admin',
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_telpon' => Auth::user()->phone_number,
                'email' => Auth::user()->email,
                'berat_badan' => $request->berat_badan,
                'tinggi_badan' => $request->tinggi_badan,
                'surat_str' => $fileFotoSuratStr,
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
    }
    public function updateProfile(Request $request){
       if(Auth::user()->role->name == 'Pasien'){
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
       }else{
        $updateProfile = Therapist::where('email', Auth::user()->email)->first();
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
    public function artikelTertulis(){
        $listArticles = Article::all();
        return view('pages.front-end.daftarArtikel', compact(['listArticles']));
    }
    public function tulisArtikel(){
        return view('pages.front-end.tulisArtikel');
    }
    public function postArticles(Request $request){
        $ekstensi = $request->file('foto_artikel')->clientExtension();
        $nama = 'artikel'.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto_artikel')->storeAs('images', $nama);
        $request['foto_artikel'] = $nama;
        $postArticles = Article::create([
            'id_terapis' => Auth::user()->id,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'foto_artikel' => $nama,
        ]);
        if($postArticles){
            Session::flash('status', 'success');
            Session::flash('message', 'Artikel berhasil di posting');
            return redirect('/tulisArtikel');
        } else {
            Session::flash('status', 'failed');
            Session::flash('message', 'Artikel gagal di posting');
            return redirect('/tulisArtikel');
        }
    }
    public function bacaArtikel($id){
        $bacaArtikel = Article::find($id);
        return view('pages.front-end.bacaArtikel', compact(['bacaArtikel']));
    }
    public function contactUs(){
        return view('pages.front-end.contactUs');
    }
}
