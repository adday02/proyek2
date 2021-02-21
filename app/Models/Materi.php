<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table='materis';
    protected $primaryKey = 'id_materi';
    protected $fillable = ['id_materi','judul','nip','video','kategori','foto','deskripsi']; //field tabel
    public $timestamps = false;

    public function pegawai()
    {
	return $this->belongsTo('App\Models\Pegawai','nip');
    }
}
