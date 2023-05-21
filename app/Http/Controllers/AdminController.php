<?php

namespace App\Http\Controllers;

use App\Exports\JanjiTemuExport;
use App\Exports\PatientExport;
use App\Exports\TerapisExport;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Therapist;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function Dashboard(){
        $sumPengguna = Patient::count();
        $sumTerapis = Therapist::count();
        return view('pages.back-end.dashboard', compact('sumPengguna', 'sumTerapis'));
    }
    public function listAdmin(){
        $listAdmin = User::where('id_role', 1)->get();
        return view('pages.back-end.listAdmin', compact('listAdmin'));
    }
    public function listUser(){
        $listUser = User::where('id_role', 2)->get();
        $listPatient = Patient::all();
        return view('pages.back-end.listUser', compact('listUser', 'listPatient'));
    }
    public function ExportDataPatient(){
        return Excel::download(new PatientExport, 'DataPasien-feelbetter.xlsx');
    }
    public function detailPengguna($id){
        $detailPatient = Patient::find($id);
        return view('pages.back-end.detailPengguna', compact('detailPatient'));
    }
    public function detailKTP($id){
        $detailKTP = Patient::find($id);
        return view('pages.back-end.detailKTP', compact('detailKTP'));
    }
    public function validasiPengguna($id){
        $validasiPengguna = Patient::find($id);
        return view('pages.back-end.validasiPengguna', compact('validasiPengguna'));
    }
    public function prosesValidasiPengguna(Request $request, $id){
        $validasiPengguna = Patient::find($id);
        $validasiPengguna->update($request->except('_token'));
        return redirect('/admin/listUser');
    }
    public function listTerapis(){
        $listTerapis = User::where('id_role', 3)->get();
        $daftarTerapis = Therapist::all();
        return view('pages.back-end.listTerapis', compact('listTerapis', 'daftarTerapis'));
    }
    public function ExportDataTerapis(){
        return Excel::download(new TerapisExport, 'DataTerapis-feelbetter.xlsx');
    }
    public function detailTerapis($id){
        $detailTerapis = Therapist::find($id);
        return view('pages.back-end.detailTerapis', compact('detailTerapis'));
    }
    public function detailSTR($id){
        $detailSTR = Therapist::find($id);
        return view('pages.back-end.detailSTR', compact('detailSTR'));
    }
    public function validasiTerapis($id){
        $validasiTerapis = Therapist::find($id);
        return view('pages.back-end.validasiTerapis', compact('validasiTerapis'));
    }
    public function prosesValidasiTerapis(Request $request, $id){
        $validasiPengguna = Therapist::find($id);
        $validasiPengguna->update($request->except('_token'));
        return redirect('/admin/listTerapis');
    }
    public function janjiTemu(){
        $janjiTemu = Appointment::all();
        return view('pages.back-end.janjiTemu', compact('janjiTemu'));
    }
    public function ExportDataJanjiTemu(){
        return Excel::download(new JanjiTemuExport, 'DataJanjiTemu-feelbetter.xlsx');
    }
    public function pembayaran(){
        return view('pages.back-end.pembayaran');
    }
    public function daftarLayanan(){
        $daftarLayanan = Service::all();
        return view('pages.back-end.daftarLayanan', compact(['daftarLayanan']));
    }
    public function tambahLayanan(){
        return view('pages.back-end.tambahLayanan');
    }
    public function CreateLayanan(Request $request){
        $ekstensi = $request->file('gambar')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('images', $nama);
        $request['gambar'] = $nama;
        $insertPackage = Service::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama,
        ]);
        if($insertPackage){
            return redirect('/admin/daftarLayanan');
        }
    }
    public function fotoLayanan($id){
        $fotoLayanan = Service::find($id);
        return view('pages.back-end.fotoLayanan', compact(['fotoLayanan']));
    }
    public function editLayanan($id){
        $editLayanan = Service::find($id);
        return view('pages.back-end.editLayanan', compact(['editLayanan']));
    }
    public function updateLayanan(Request $request, $id){
        $ekstensi = $request->file('gambar')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('gambar')->storeAs('images', $nama);
        $request['gambar'] = $nama;
        $updateLayanan = Service::find($id)->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama,
        ]);
         if($updateLayanan){
            return redirect('/admin/daftarLayanan');
        }
    }
    public function deleteServide($id){
        $deleteServide = Service::find($id);
        $deleteServide->delete();
        return redirect('/admin/daftarLayanan');
    }
}
