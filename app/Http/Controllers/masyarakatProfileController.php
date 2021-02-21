<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class masyarakatProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakats = Masyarakat::All();
        return view('profileMasyarakat',compact('masyarakats'))
            ->with('i');
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
            'nama'      =>'required',
            'tl'        =>'required',
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
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(            
            'foto'=>$new_name,
            );
        Masyarakat::wherenik($id)->update($data);
        }
        if($request->jk)
        {
            $data = array(            
            'jk'=>$request->jk,
            );
        Masyarakat::wherenik($id)->update($data);
        }
            $data = array(
            'nama'=>$request->nama,    
            'password'=>$request->password,
            'tl'=>$request->tl,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat
            );
        Masyarakat::wherenik($id)->update($data);
        return redirect('masyarakat-profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
