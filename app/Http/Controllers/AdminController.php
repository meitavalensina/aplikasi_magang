<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industri;
use App\Kuliner;
use App\Minimarket;
use App\Kost;
use App\Wisata;
use App\Laundry;
use App\Tips_trik;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //---------------------------------------------fitur industri---------------------------------
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
            'kontak' => 'required',
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
            'kontak' => $request->kontak,
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
            'kontak' => 'required',
            'bidang' => 'required',
            'periode' => 'required',
            'deskripsi' => 'required',
            ]);
            $update = [
                'nama' => $request->nama, 
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
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
            $update['kontak'] = $request->get('kontak');
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
        $minimarket = Minimarket::find($kode_market);
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


    //------------------------------------fitur kost-----------------------------------------
    public function view_kost(){
        $kost = Kost::all();
        return view('admin.content.view_kost', compact('kost'));
    }
    public function create_kost(){
        return view('admin.content.create_kost');
    }
    public function store_kost(Request $request){
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'fasilitas' => 'required',
        ]);
 
        if ($validate->fails()) {
            return redirect('/createkost-admin')->withErrors($validate,'kost')->withInput();
        }
        // menyimpan data file yang diupload ke variabel $file, good job!
        $file = $request->file('file');
    
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $file->storeAs('uploads',$nama_file,'public');

        $kost = new Kost;
        $kost->nama = $request->nama;
        $kost->alamat = $request->alamat;
        $kost->harga = $request->harga;
        $kost->kontak = $request->kontak;
        $kost->gambar = $nama_file;
        $kost->fasilitas = $request->fasilitas;
        $kost->save();
        
        return redirect('/kost-admin');
		
    }

    public function edit_kost($id_kost){
        $kost = Kost::find($id_kost);
        return view('admin.content.edit_kost', compact('kost'));
    }

    public function update_kost($id_kost, Request $request)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'fasilitas' => 'required',
        ]);

        $kost = Kost::find($id_kost);
        $kost->nama = $request->nama;
        $kost->alamat = $request->alamat;
        $kost->harga = $request->harga;
        $kost->kontak = $request->kontak;
        $kost->fasilitas = $request->fasilitas;

        if($request->hasfile('file')){
            // menyimpan data file yang diupload ke variabel $file, good job!
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $file->storeAs('uploads',$nama_file,'public');
            $kost->gambar = $nama_file;
        }
        $kost->save();

        return redirect('/kost-admin');
    }

    public function hapus_kost($id){
        $kost = Kost::find($id);
        $kost->delete();
        return redirect('/kost-admin');
    }

    //--------------------------------------------------fitur wisata-----------------------------
    public function view_wisata(){
        $wisata = Wisata::all();
        return view ('admin.content.view_wisata', compact('wisata'));
    }

    public function create_wisata(){
        return view('admin.content.create_wisata');
    }

    public function store_wisata(Request $request){
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'lokasi' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tiket_masuk' => 'required',
        ]);
 
        if ($validate->fails()) {
            return redirect('/createwisata-admin')->withErrors($validate,'kost')->withInput();
        }
        // menyimpan data file yang diupload ke variabel $file, good job!
        $file = $request->file('file');
    
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $file->storeAs('uploads',$nama_file,'public');

        $wisata = new Wisata;
        $wisata->nama = $request->nama;
        $wisata->lokasi = $request->lokasi;
        $wisata->gambar = $nama_file;
        $wisata->tiket_masuk = $request->tiket_masuk;
        $wisata->save();
        
        return redirect('/wisata-admin');
		
    }
    public function edit_wisata($kode_wisata){
        $wisata = Wisata::find($kode_wisata);
        return view('admin.content.edit_wisata', compact('wisata'));
    }

    public function update_wisata($kode_wisata, Request $request)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'lokasi' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tiket_masuk' => 'required',
        ]);

        $wisata = Wisata::find($kode_wisata);
        $wisata->nama = $request->nama;
        $wisata->lokasi = $request->lokasi;
        $wisata->tiket_masuk = $request->tiket_masuk;

        if($request->hasfile('file')){
            // menyimpan data file yang diupload ke variabel $file, good job!
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $file->storeAs('uploads',$nama_file,'public');
            $wisata->gambar = $nama_file;
        }
        $wisata->save();

        return redirect('/wisata-admin');
    }

    public function hapus_wisata($id){
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('/wisata-admin');
    }

    //---------------------------------------------fitur laundry----------------------------------

    public function view_laundry(){
        $laundry = Laundry::all();
        return view('admin.content.view_laundry', compact('laundry'));
    }
    public function create_laundry(){
        return view('admin.content.create_laundry');
    } 
    
    public function store_laundry(Request $request){
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'lokasi' => 'required',
            'daftar_harga' => 'required',
        ]);

        $laundry = new Laundry;
        $laundry->nama = $request->nama;
        $laundry->lokasi = $request->lokasi;
        $laundry->daftar_harga = $request->daftar_harga;
        $laundry->save();
        
        return redirect('/laundry-admin');
		
    }
    public function edit_laundry($kode_laundry){
        $laundry = Laundry::find($kode_laundry);
        return view('admin.content.edit_laundry', compact('laundry'));
    }

    public function update_laundry($kode_laundry, Request $request)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'lokasi' => 'required',
            'daftar_harga' => 'required',
        ]);

        $laundry = Laundry::find($kode_laundry);
        $laundry->nama = $request->nama;
        $laundry->lokasi = $request->lokasi;
        $laundry->daftar_harga = $request->daftar_harga;
        $laundry->save();
        
        return redirect('/laundry-admin');
    }
    
    public function hapus_laundry($id){
        $laundry = Laundry::find($id);
        $laundry->delete();
        return redirect('/laundry-admin');
    }

    //-----------------------------------------fitur tips and trik----------------------------------
    public function view_tipstrik(){
        $tipstrik = Tips_trik::all();
        return view('admin.content.view_tipstrik', compact('tipstrik'));
    }
    public function create_tipstrik(){
        return view('admin.content.create_tipstrik');
    }
    public function store_tipstrik(Request $request){
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $tipstrik = new Tips_trik;
        $tipstrik->judul = $request->judul;
        $tipstrik->deskripsi = $request->deskripsi;
        $tipstrik->save();
        
        return redirect('/tipstrik-admin');
    }
    public function edit_tipstrik($id){
        $tipstrik = Tips_trik::find($id);
        return view('admin.content.edit_tipstrik', compact('tipstrik'));
    }
    public function update_tipstrik($id_tips, Request $request)
    {
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $tipstrik = Tips_trik::find($id_tips);
        $tipstrik->judul = $request->judul;
        $tipstrik->deskripsi = $request->deskripsi;
        $tipstrik->save();
        
        return redirect('/tipstrik-admin');
    }
    public function hapus_tipstrik($id){
        $tipstrik = Tips_trik::find($id);
        $tipstrik->delete();
        return redirect('/tipstrik-admin');
    }
}