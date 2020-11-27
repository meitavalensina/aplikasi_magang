<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Industri;
use App\Kost;
use App\Kuliner;
use App\Laundry;
use App\Minimarket;
use App\Wisata;

class DashboardController extends Controller
{
    public function kontak()
    {
        return view('dashboard.content.kontak');
    }

    public function home()
    {
        return view('dashboard.content.dashboard');
    }



    public function detail_industri(Industri $industri)
    {
        return view('dashboard.content.industri_detail', compact('industri'));
    }

    public function industri()
    {
        $industri = Industri::all();
        return view('dashboard.content.industri', compact('industri'));
    }

    public function cariindustri(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $industri = DB::table('industris')
            ->where('alamat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.industri', ['industri' => $industri]);
    }




    public function kost()
    {
        $kos = Kost::all();
        return view('dashboard.content.kos', compact('kos'));
    }

    public function detail_kos(Kost $kos)
    {
        return view('dashboard.content.kos_detail', compact('kos'));
    }

    public function carikost(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $kos = DB::table('kosts')
            ->where('alamat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.kos', ['kos' => $kos]);
    }




    public function kuliner()
    {
        $kuliner = Kuliner::all();
        return view('dashboard.content.kuliner', compact('kuliner'));
    }

    public function detail_kuliner(Kuliner $kuliner)
    {
        return view('dashboard.content.kuliner_detail', compact('kuliner'));
    }

    public function carikuliner(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $kuliner = DB::table('kuliners')
            ->where('lokasi', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.kuliner', ['kuliner' => $kuliner]);
    }



    public function laundry()
    {
        $laundry = Laundry::all();
        return view('dashboard.content.laundry', compact('laundry'));
    }
    public function detail_laundry(Laundry $laundry)
    {
        return view('dashboard.content.laundry_detail', compact('laundry'));
    }

    public function carilaundry(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $laundry = DB::table('laundries')
            ->where('lokasi', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.laundry', ['laundry' => $laundry]);
    }




    public function minimarket()
    {
        $minimarket = Minimarket::all();
        return view('dashboard.content.minimarket', compact('minimarket'));
    }
    public function detail_minimarket(Minimarket $minimarket)
    {
        return view('dashboard.content.minimarket_detail', compact('minimarket'));
    }

    public function cariminimarket(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $minimarket = DB::table('minimarkets')
            ->where('lokasi', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.minimarket', ['minimarket' => $minimarket]);
    }



    public function transport()
    {
        return view('dashboard.content.transport');
    }



    public function wisata()
    {
        $wisata = Wisata::all();
        return view('dashboard.content.wisata', compact('wisata'));
    }
    public function detail_wisata(Wisata $wisata)
    {
        return view('dashboard.content.wisata_detail', compact('wisata'));
    }

    public function cariwisata(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $wisata = DB::table('wisatas')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('dashboard.content.wisata', ['wisata' => $wisata]);
    }
}
