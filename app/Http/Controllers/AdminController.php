<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function view_industri(){
        return view('admin.content.view_industri');
    }
    public function create_industri(){
        return view('admin.content.create_industri');
    }
    public function edit_industri(){
        return view('admin.content.edit_industri');
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