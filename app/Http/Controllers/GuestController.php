<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class GuestController extends Controller
{
    public function index(){
        $datas = Pengumuman::all();
        return view('blog', compact('datas'));
    }
}
