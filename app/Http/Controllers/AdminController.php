<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard(){
        return view('pages.back-end.dashboard');
    }
    public function listAdmin(){
        return view('pages.back-end.listAdmin');
    }
    public function listUser(){
        return view('pages.back-end.listUser');
    }
    public function listTerapis(){
        return view('pages.back-end.listTerapis');
    }
    public function janjiTemu(){
        return view('pages.back-end.janjiTemu');
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
