<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table='masyarakats';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama','password','jk','tl','no_hp','alamat','foto','alamat']; //field tabel
    public $timestamps = false;
}

