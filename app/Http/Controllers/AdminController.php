<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industri;
use App\Kuliner;
use App\Minimarket;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.content.index');
    }
    //----------------------BAGIAN INDUSTRI----------------------
    public function view_industri(){
        $industri = Industri::all();
        return view('admin.content.view_industri', compact('industri'));
    }
    public function create_industri(){
        return view('admin.content.create_industri');
    }
    public function prosescreate(Request $request){
        $request->validate([
            'kode_industri' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'bidang' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'periode' => 'required',
            'deskripsi' => 'required',
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('gambar');
        $nama_gambar = time() . "_" . $gambar->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $destinationPath = 'gambar';
        $gambar->move($destinationPath, $nama_gambar);
        Industri::create([
            'kode_industri' => $request->kode_industri,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'bidang' => $request->bidang,
            'gambar' =>$nama_gambar,
            'periode' => $request->periode,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/industri-admin')->with('status', 'Data Wisata Berhasil Ditambahkan!');
    }
    public function edit_industri($kode_industri){
        $industri = Industri::find($kode_industri);
        return view('admin.content.edit_industri', compact('industri'));
    }
    public function post_editin(Request $request, $kode_industri){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'bidang' => 'required',
            'periode' => 'required',
            'deskripsi' => 'required',
            ]);
            $update = [
                'nama' => $request->nama, 
                'alamat' => $request->alamat,
                'bidang' => $request->bidang,
                'periode' => $request->periode,
                'deskripsi' => $request->deskripsi];
            if ($gambarr = $request->file('gambar')) {
            $destinationPath = 'gambar'; // upload path
            $nama_gambar = date('YmdHis') . "." . $gambarr->getClientOriginalExtension();
            $gambarr->move($destinationPath, $nama_gambar);
            $update['gambar'] = "$nama_gambar";
            }
            $update['nama'] = $request->get('nama');
            $update['alamat'] = $request->get('alamat');
            $update['bidang'] = $request->get('bidang');
            $update['periode'] = $request->get('periode');
            $update['deskripsi'] = $request->get('deskripsi');
            Industri::where('kode_industri', $kode_industri)->update($update);
        return redirect('/industri-admin');
    }
    public function destroy($kode_industri)
    {
        $destroy = Industri::find($kode_industri);
        $destroy->delete();
        return redirect('/industri-admin')->with('status', 'Data Minimarket Berhasil Dihapus!');
    }

    //----------------------BAGIAN KULINER----------------------
    public function view_kuliner(){
        $kuliner = Kuliner::all();
        return view('admin.content.view_kuliner', compact('kuliner'));
    }
    public function create_kuliner(){
        return view('admin.content.create_kuliner');
    }
    public function proseskuliner(Request $request){
        $request->validate([
            'kode_kuliner' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required',
            'jadwal_buka' => 'required',
        ]);
        // menyimpan data file yang diupload ke variabel $gambar
        $gambar = $request->file('gambar');
        $nama_gambar = time() . "_" . $gambar->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $destinationPath = 'gambar';
        $gambar->move($destinationPath, $nama_gambar);
        Kuliner::create([
            'kode_kuliner' => $request->kode_kuliner,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'gambar' =>$nama_gambar,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jadwal_buka' => $request->jadwal_buka,
        ]);
        return redirect('/kuliner-admin')->with('status', 'Data Wisata Berhasil Ditambahkan!');
    }
    public function edit_kuliner($kode_kuliner){
        $kuliner = Kuliner::find($kode_kuliner);
        return view('admin.content.edit_kuliner', compact('kuliner'));
    }
    public function post_kuliner(Request $request, $kode_kuliner){
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'jadwal_buka' => 'required',
            ]);
            $update = [
                'nama' => $request->nama, 
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'jadwal_buka' => $request->jadwal_buka];
            if ($gambarr = $request->file('gambar')) {
            $destinationPath = 'gambar'; // upload path
            $nama_gambar = date('YmdHis') . "." . $gambarr->getClientOriginalExtension();
            $gambarr->move($destinationPath, $nama_gambar);
            $update['gambar'] = "$nama_gambar";
            }
            $update['nama'] = $request->get('nama');
            $update['lokasi'] = $request->get('lokasi');
            $update['deskripsi'] = $request->get('deskripsi');
            $update['harga'] = $request->get('harga');
            $update['jadwal_buka'] = $request->get('jadwal_buka');
            Kuliner::where('kode_kuliner', $kode_kuliner)->update($update);
        return redirect('/kuliner-admin');
    }
    public function hapuskul($kode_kuliner)
    {
        $destroy = Kuliner::find($kode_kuliner);
        $destroy->delete();
        return redirect('/kuliner-admin')->with('status', 'Data minimarket Berhasil Dihapus!');
    }

    //---------------BAGIAN MINIMARKET-----------------
    public function view_minimarket(){
        $minimarket = Minimarket::all();
        return view('admin.content.view_minimarket', compact('minimarket'));
    }
    public function create_minimarket(){
        return view('admin.content.create_minimar');
    }
    public function proses_market(Request $request)
    {
        $minimarket = new Minimarket;
        $minimarket->kode_market = $request->kode_market;
        $minimarket->nama = $request->nama;
        $minimarket->lokasi = $request->lokasi;
        $minimarket->save();
        return redirect('/minimarket-admin')->with('status', 'Data Minimarket Berhasil Ditambah!');;
    }
    public function edit_minimarket($kode_market)
    {
        $minimarket = Minimarket::find($kode_market);
        return view('admin.content.edit_minimarket', compact('minimarket'));
    }
    public function post_minimarket(Request $request, $kode_market){
        $minimarket = Minimarket::find($request->kode_market);
        $minimarket->nama = $request->nama;
        $minimarket->lokasi = $request->lokasi;
        $minimarket->save();
        return redirect('/minimarket-admin');
    }
    public function hapusmm($kode_market)
    {
        $destroy = Minimarket::find($kode_market);
        $destroy->delete();
        return redirect('/minimarket-admin')->with('status', 'Data Minimarket Berhasil Dihapus!');
    }

}