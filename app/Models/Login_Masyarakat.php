<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login_Masyarakat extends Authenticatable
{
    protected $table='masyarakats';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama','password','jk','tl','no_hp','alamat','foto','alamat']; //field tabel
    public $timestamps = false;
}
