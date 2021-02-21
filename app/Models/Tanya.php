<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    protected $table='tanyas';
    protected $primaryKey = 'id_tanya';
    protected $fillable = ['id_tanya','nip','nik','pertanyaan','jawaban']; //field tabel
    public $timestamps = false;
    
    public function masyarakat()
    {
	return $this->belongsTo('App\Models\Masyarakat','nik');
    }
    public function pegawai()
    {
	return $this->belongsTo('App\Models\Pegawai','nip');
    }

}
