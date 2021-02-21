<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table='jadwals';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['id_jadwal','judul','jam','hari','tanggal','foto','tempat','status']; //field tabel
    public $timestamps = false;
}
