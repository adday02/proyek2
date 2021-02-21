<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class pegawaiProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('profilePegawai', compact('pegawais'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [
            'password'  =>'required|max:255',
            'foto'      =>'mimes:jpg,jpeg,png',
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
            $data = array(
            'foto'=>$new_name,
        );
        Pegawai::wherenip($id)->update($data);
        }
            $data = array(
            'password'=>$request->password,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
            );
        Pegawai::wherenip($id)->update($data);
        return redirect('pegawai-profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}