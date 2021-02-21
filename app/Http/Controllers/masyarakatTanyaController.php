<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;

class masyarakatTanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanyas = Tanya::All();
        return view('tanyaMasyarakat',compact('tanyas'))
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'nik'=>$request->nik,
            'pertanyaan'=>$request->pertanyaan,
            'nip'=>$request->nip,
            'jawaban'=>$request->jawaban,
        );
        Tanya::create($data);
        return redirect('masyarakat-tanya')->with('success','masyarakat berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
            $datas = Tanya::findOrfail($id);
            $datas->delete();
            return redirect ('masyarakat-tanya')->with('success','jadwal Berhasil Dihapus');
        }catch(\throwable $th){
            return redirect('masyarakat-tanya')->withErrors('Data gagal dihapus, Harap hapus data jadwal yang terkait');
        }
    }
}
