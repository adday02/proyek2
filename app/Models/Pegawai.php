<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawais';
    protected $primaryKey = 'nip';
    protected $fillable = ['nip','nama','password','jk','tl','no_hp','foto','alamat','jabatan']; //field tabel
    public $timestamps = false;
}
