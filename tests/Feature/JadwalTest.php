<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\models\Jadwal;
use Tests\TestCase;

class JadwalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $jadwal = Jadwal::create([
            'judul' => 'Pentingnya menggunakan masker',
            'jam' => '10:30:00',
            'hari' => 'Senin',
            'tanggal' => '2021-01-04',
            'foto' => 'masker.jpg',
            'tempat' => 'Pamayahan',
            'status' => 'Belum Terlaksana',
           ]);
        $this->assertDatabaseHas('jadwals',[
            'judul' => 'Pentingnya menggunakan masker',
            'jam' => '10:30:00',
            'hari' => 'Senin',
            'tanggal' => '2021-01-04',
            'foto' => 'masker.jpg',
            'tempat' => 'Pamayahan',
            'status' => 'Belum Terlaksana',
        ]);
    }
}
