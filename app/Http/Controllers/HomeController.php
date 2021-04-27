<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $title="PROJECT WEB";
        $data['mahasiswa']=array(
            'Nim'=>'1915101020',
            'Nama'=>'Agung Bajrajnana'
        );
        return view('admin.beranda',compact('title','data'));
    }
}
