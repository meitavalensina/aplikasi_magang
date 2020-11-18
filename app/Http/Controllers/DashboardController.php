<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.content.home');
    }

    public function industri()
    {
        return view('dashboard.content.industri');
    }

    public function kost()
    {
        return view('dashboard.content.kos');
    }

    public function kuliner()
    {
        return view('dashboard.content.kuliner');
    }

    public function laundry()
    {
        return view('dashboard.content.laundry');
    }

    public function minimarket()
    {
        return view('dashboard.content.minimarket');
    }

    public function transport()
    {
        return view('dashboard.content.transport');
    }

    public function wisata()
    {
        return view('dashboard.content.wisata');
    }
}
