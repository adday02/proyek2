<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login_Pegawai extends Authenticatable
{
    protected $table='pegawais';
    protected $primaryKey = 'nip';
    protected $fillable = ['nip','nama','password','jk','tl','no_hp','foto','alamat','jabatan']; //field tabel
    public $timestamps = false;
}
