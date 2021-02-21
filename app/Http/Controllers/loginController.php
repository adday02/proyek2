<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Pegawai;
use App\Models\Masyarakat;
use Auth;
class loginController extends Controller
{
    function masuk(Request $kiriman)
    {
        $data1=Admin::where('username',$kiriman->username)->where('password',$kiriman->password)->get();
        $data2=Pegawai::where('nip',$kiriman->username)->where('password',$kiriman->password)->get();
        $data3=Masyarakat::where('nik',$kiriman->username)->where('password',$kiriman->password)->get();

        if (count($data1)>0) {
    		Auth::guard('admin')->LoginUsingId($data1[0]['username']);
    		return redirect('/admin-dashboard');
    	}
    	else if (count($data2)>0) {
    		Auth::guard('pegawai')->LoginUsingId($data2[0]['nip']);
            return redirect('/pegawai-profile');
    	}
    	else if (count($data3)>0) {
    		Auth::guard('masyarakat')->LoginUsingId($data3[0]['nik']);
    		return redirect('/masyarakat-profile');
    	}
    	else{
    		return redirect('/masuk')->with('Login Gagal');
    	}
    }

    function keluar()
    {
        if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}else if (Auth::guard('pegawai')->check()) {
    		Auth::guard('pegawai')->logout();
		}else if (Auth::guard('masyarakat')->check()) {
    		Auth::guard('masyarakat')->logout();
        }
		return redirect('/masuk');
    }
}
