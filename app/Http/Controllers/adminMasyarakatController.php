<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class adminMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakats = Masyarakat::latest()->paginate(5);
        return view('masyarakatAdmin',compact('masyarakats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'nama'=>$request->nama,
            'password'=>$request->nik,
            'jk'=>$request->jk,
            'foto'=>$request->foto,
            'tl'=>$request->tl,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat
        );
        Masyarakat::create($data);
        return redirect('admin-masyarakat')->with('success','masyarakat berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(            
            'foto'=>$new_name,
            );
        Masyarakat::wherenik($id)->update($data);
        return redirect('admin-masyarakat');
        }
            $data = array(
            'nik'=>$request->nik,
            'password'=>$request->password,
            'jk'=>$request->jk,
            'tl'=>$request->tl,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->tl
            );
        Masyarakat::wherenik($id)->update($data);
        return redirect('admin-masyarakat');
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
            $datas = Masyarakat::findOrfail($id);
            $datas->delete();
            return redirect('admin-masyarakat')->with('success','masyarakat Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-masyarakat')->withErrors('Data gagal dihapus. Harap hapus data Jadwal yang terkait');
        }
    }
}
