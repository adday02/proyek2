<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\models\Pegawai;
use Tests\TestCase;

class PegawaiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $pegawai = Pegawai::create([
            'nip' => '1805055',
            'nama' => 'Rafli Bagus',
            'password' => 'Rafli123',
            'jk' => 'Laki-laki',
            'tl' => '2020-01-01',
            'no_hp' => '08123456789',
            'foto' => 'rafli.jpg',
            'alamat' => 'Drajat Cirebon',
            'jabatan'=>'Dokter Umum'
           ]);
        $this->assertDatabaseHas('pegawais',[
            'nip' => '1805055',
            'nama' => 'Rafli Bagus',
            'password' => 'Rafli123',
            'jk' => 'Laki-laki',
            'tl' => '2020-01-01',
            'no_hp' => '08123456789',
            'foto' => 'rafli.jpg',
            'alamat' => 'Drajat Cirebon',
            'jabatan'=>'Dokter Umum'
        ]);
        
    }
}
