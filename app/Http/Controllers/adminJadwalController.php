<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class adminJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::latest()->paginate(5);
        return view('jadwalAdmin',compact('jadwals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            ['judul'    =>'required|max:255',
            'jam'       =>'required',
            'hari'      =>'required',
            'tanggal'   =>'required',
            'foto'      =>'required|mimes:jpg,png,jpeg',
            'tempat'    =>'required|max:255',
        ],
        [
            'required'  =>'Data tidak Boleh Kosong',
            'mimes'     =>'File Harus berbentuk gambar',
            'max'       =>'Tidak boleh input lebih dari 255 karakter'
        ]);

        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

        $data = array(
            'judul'=>$request->judul,
            'jam'=>$request->jam,
            'hari'=>$request->hari,
            'tanggal'=>$request->tanggal,
            'foto'=>$new_name,
            'tempat'=>$request->tempat,
            'status'=>$request->status,
        );
        Jadwal::create($data);
        return redirect('admin-jadwal')->with('success','jadwal berhasil ditambah');

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
            ['judul'    =>'required|max:255',
            'jam'       =>'required',
            'tanggal'   =>'required',
            'foto'      =>'mimes:jpg,png,jpeg',
            'tempat'    =>'required|max:255',

        ],

        [
            'required'  =>'Data tidak Boleh Kosong',
            'mimes'     =>'File Harus berbentuk gambar',
            'max'       =>'Tidak boleh input lebih dari 255 karakter'
        ]);

        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(
            'foto'=>$new_name,
        );

        Jadwal::whereid_jadwal($id)->update($data);
        }
        if($request->status){
            $data = array(
                'status'=>$request->status,
            );
            Jadwal::whereid_jadwal($id)->update($data);

        }
        if($request->hari){
            $data = array(
                'hari'=>$request->hari,
            );
            Jadwal::whereid_jadwal($id)->update($data);

        }
            $data = array(
            'judul'=>$request->judul,
            'jam'=>$request->jam,
            'tanggal'=>$request->tanggal,
            'tempat'=>$request->tempat,
            );
        Jadwal::whereid_jadwal($id)->update($data);
        return redirect('admin-jadwal');
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
            $datas = jadwal::findOrfail($id);
            $datas->delete();
            return redirect('admin-jadwal')->with('success','jadwal Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-jadwal')->withErrors('Data gagal dihapus. Harap hapus data Jadwal yang terkait');
        }
    }
}
