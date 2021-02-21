<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Jadwal;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal',compact('jadwals'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
