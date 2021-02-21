<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::All();
        return view('pegawaiAdmin',compact('pegawais'))
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            ['nip'      =>'required|numeric',
            'nama'      =>'required|regex:/^[a-zA-Z\s]*$/|max:255',
            'password'  =>'required|max:255',
            'jk'        =>'required|',
            'foto'      =>'required|mimes:jpg,jpeg,png',
            'tl'        =>'required|',
            'alamat'    =>'required|max:255'
        ],
        [
            'required'      =>'Data tidak Boleh Kosong',
            'nip.numeric'   =>'NIP harus berupa angka',
            'no_hp.numeric' =>'No HP harus berupa angka',
            'max'           =>'Data maksimmal 255 karakter',
            'foto.mimes'    => 'File harus berpentuk Foto'
        ]);
        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

        $data = array(
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'password'=>$request->password,
            'jk'=>$request->jk,
            'foto'=>$new_name,
            'tl'=>$request->tl,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat
        );
        Pegawai::create($data);
        return redirect('admin-pegawai')->with('success','masyarakat berhasil ditambah');
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
            ['nip'      =>'required|numeric',
            'nama'      =>'required|regex:/^[a-zA-Z\s]*$/|max:255',
            'password'  =>'required|max:255',
            'jk'        =>'required|',
            'foto'      =>'mimes:jpg,jpeg,png',
            'tl'        =>'required|',
            'alamat'    =>'required|max:255'
        ],
        [
            'required'      =>'Data tidak Boleh Kosong',
            'nip.numeric'   =>'NIP harus berupa angka',
            'no_hp.numeric' =>'No HP harus berupa angka',
            'max'           =>'Data maksimmal 255 karakter',
            'foto.mimes'    => 'File harus berpentuk Foto'
        ]);
        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(            
                'foto'=>$new_name,
            );
        Pegawai::wherenip($id)->update($data);
        }
            $data = array(
                'nama'=>$request->nama,
                'password'=>$request->password,
                'jk'=>$request->jk,
                'tl'=>$request->tl,
                'no_hp'=>$request->no_hp,
                'alamat'=>$request->alamat
            );
        Pegawai::wherenip($id)->update($data);
        return redirect('admin-pegawai');
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
            $datas = Pegawai::findOrfail($id);
            $datas->delete();
            return redirect('admin-pegawai')->with('success','pegawai Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-pegawai')->withErrors('Data gagal dihapus. Harap hapus data Jadwal yang terkait');
        }
    }
}
