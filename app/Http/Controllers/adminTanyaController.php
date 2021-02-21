<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;
use App\Models\Masyarakat;
use App\Models\Pegawai;

class adminTanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanyas = Tanya::all();
        $masyarakats = Masyarakat::all();
        $pegawais = Pegawai::all();
        return view('tanyaAdmin',compact('tanyas','masyarakats','pegawais'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $datas = Tanya::findOrfail($id);
            $datas->delete();
            return redirect('admin-tanya')->with('success','tanya Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-tanya')->withErrors('Data gagal dihapus. Harap hapus data murid yang terkait');
        }
    }
}
