<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/karyawan');
        $karyawan = $data->json();
        return view('karyawan.index')->with('karyawan' , $karyawan['data']);
    }
}
