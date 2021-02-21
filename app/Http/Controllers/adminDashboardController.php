<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Masyarakat;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Models\Kategori;
use App\Models\Tanya;

class adminDashboardController extends Controller
{
    public function index()
    {
    	$pegawai = Pegawai::count();
    	$masyarakat = Masyarakat::count();
    	$jadwal = Jadwal::count();
    	$materi = materi::count();
    	$kategori = Kategori::count();
    	$tanya = Tanya::count();

    	return view('dashboardAdmin', compact('pegawai','masyarakat','jadwal','materi','kategori','tanya'));
    }
}
