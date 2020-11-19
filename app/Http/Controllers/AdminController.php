<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
}
