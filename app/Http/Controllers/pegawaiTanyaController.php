<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;
use App\Models\Pegawai;
use App\Models\Masyarakat;

class pegawaiTanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanyas = Tanya::all();
        $pegawais = Pegawai::all();
        $masyarakats = Masyarakat::all();
        return view('tanyaPegawai', compact('tanyas','pegawais','masyarakats'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, $id)
    {
        $data = array(
            'nip'=>$request->nip,
            'jawaban'=>$request->jawaban,
        );
        Tanya::whereId_tanya($id)->update($data);
        return redirect('pegawai-tanya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}