<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class PembayaranSPPController extends Controller
{
    public function index()
    {
        $data_siswa = siswa::all();
        return view ('SPPAEROFEE.index',['data_siswa'=> $data_siswa]);
    }
}