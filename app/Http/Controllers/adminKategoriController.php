<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class adminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategoriAdmin',compact('kategoris'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $validateData = $request->validate(
            ['nama'    =>'required|max:255',
        ],

        [
            'required'  =>'Data tidak Boleh Kosong',
            'max'       =>'Tidak boleh input lebih dari 255 karakter'
        ]);

        $data = array(
            'nama'=>$request->nama,
        );
        Kategori::create($data);
            return redirect('admin-kategori')->with('success','Kategori berhasil ditambah');
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
            ['nama'    =>'required|max:255',
        ],

        [
            'required'  =>'Data tidak Boleh Kosong',
            'max'       =>'Tidak boleh input lebih dari 255 karakter'
        ]);
        $data = array(
             'nama'=> $request->nama,                
            );
        Kategori::whereId_kategori($id)->update($data);
        return redirect('admin-kategori');
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
            $datas = Kategori::findOrfail($id);
            $datas->delete();
            return redirect('admin-kategori')->with('success','kategori Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin-kategori')->withErrors('Data gagal dihapus. Harap hapus data murid yang terkait');
        }
    }
}
