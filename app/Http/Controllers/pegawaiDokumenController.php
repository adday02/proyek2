<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\Pegawai;
use App\Models\Kategori;

class pegawaiDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumens = Dokumen::all();
        $pegawais = Pegawai::all();
        $kategoris = Kategori::all();
        return view('dokumenPegawai',compact('dokumens','pegawais','kategoris'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            ['judul'        =>'required|max:255',
            'nip'           =>'required|numeric|',
            'pdf'           =>'required|mimes:pdf',
            'kategori'      =>'required',
        ],
        [
            'required'  =>'Data tidak Boleh Kosong',
            'mimes'     =>'Dokumen harus berbentuk .pdf',
            'numeric'   =>'NIP harus berupa angka'
        ]);
        $pdf = $request->file('pdf');
        $new_name = rand().'.'.$pdf->getClientOriginalExtension();
        $pdf->move(public_path('pdf'), $new_name);

        $data = array(
            'judul'=>$request->judul,
            'nip'=>$request->nip,
            'pdf'=>$new_name,
            'kategori'=>$request->kategori,
        );
        Dokumen::create($data);
        return redirect('pegawai-dokumen')->with('success','jadwal berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            ['judul'        =>'required|max:255',
            'pdf'           =>'mimes:pdf',
        ],
        [
            'required'  =>'Data tidak Boleh Kosong',
            'mimes'     =>'Dokumen harus berbentuk .pdf',
        ]);
        $pdf = $request->file('pdf');
        if($request->hasFile('pdf'))
        {
            $new_name = rand().'.'.$pdf->getClientOriginalExtension();
            $pdf->move(public_path('pdf'), $new_name);
            $data = array(
            'pdf'=>$new_name,
        );
        Dokumen::whereid_dokumen($id)->update($data);
        }
        if($request->kategori)
        {
            $data = array(
            'kategori'=>$request->kategori,
        );
        Dokumen::whereid_dokumen($id)->update($data);
        }
            $data = array(
            'judul'=>$request->judul,
            );
        Dokumen::whereid_dokumen($id)->update($data);
        return redirect('pegawai-dokumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $datas = Dokumen::findOrfail($id);
            $datas->delete();
            return redirect('pegawai-dokumen')->with('success','dokumen Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('pegawai-dokumen')->withErrors('Data gagal dihapus. Harap hapus data dokumen yang terkait');
        }
    }
}
