<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Pegawai;
use App\Models\Kategori;

class pegawaiMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materis = Materi::all();
        $pegawais = Pegawai::all();
        $kategoris = Kategori::all();
        return view('materiPegawai', compact('materis','pegawais','kategoris'))->with('i');
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
            'nip'       => 'required',
            'deskripsi' => 'required|max:255',
            'kategori'  => 'required|',
            'foto'      => 'required|mimes:jpeg,jpg,png',
            'video'     => 'required|mimes:mp4,mkv',
        ],
        [
            'required'  =>'Data tidak Boleh Kosong',
            'max'       =>'Data maksimmal 255 karakter',
            'foto.mimes' => 'File harus berpentuk Foto',
            'video.mimes' => 'File harus berpentuk Video'
        ]);
        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);

        $video = $request->file('video');
        $new_video = rand().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('video'), $new_video);

        $data = array(
            'judul'=>$request->judul,
            'nip'=>$request->nip,
            'video'=>$new_video,
            'kategori'=>$request->kategori,
            'foto'=>$new_name,
            'deskripsi'=>$request->deskripsi,
        );
        Materi::create($data);
        return redirect('pegawai-materi')->with('success','materi berhasil ditambah');
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
            'deskripsi' => 'required|max:255',
            'foto'      => 'mimes:jpeg,jpg,png',
            'video'     => 'mimes:mp4,mkv',
        ],
        [
            'required'  =>'Data tidak Boleh Kosong',
            'max'       =>'Data maksimmal 255 karakter',
            'foto.mimes' => 'File harus berpentuk Foto',
            'video.mimes' => 'File harus berpentuk Video'
        ]);
        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(            
                'foto'=>$new_name,
            );
            Materi::whereid_materi($id)->update($data);
        }
        $video = $request->file('video');
        if($request->hasFile('video'))
        {
            $new_video = rand().'.'.$video->getClientOriginalExtension();
            $video->move(public_path('video'), $new_video);
            $data = array(            
                'video'=>$new_video,
            );
            Materi::whereid_materi($id)->update($data);
        }
        if($request->kategori)
        {
            $data = array(            
                'kategori'=>$request->kategori,
            );
            Materi::whereid_materi($id)->update($data);
        }
        $data = array(      
        'judul'=>$request->judul,
        'deskripsi'=>$request->deskripsi,
        );
        Materi::whereid_materi($id)->update($data);
        return redirect('pegawai-materi');
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
            $datas = Materi::findOrfail($id);
            $datas->delete();
            return redirect ('pegawai-materi')->with('success','materi Berhasil Dihapus');
        }catch(\throwable $th){
            return redirect('pegawai-materi')->withErrors('Data gagal dihapus, Harap hapus data jadwal yang terkait');
        }
    }
}