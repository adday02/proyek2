<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table='dokumens';
    protected $primaryKey = 'id_dokumen';
    protected $fillable = ['id_dokumen','judul','nip','pdf','kategori']; //field tabel
    public $timestamps = false;

    public function pegawai()
    {
	return $this->belongsTo('App\Models\Pegawai','nip');
    }
    
}
