<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\models\Materi;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MateriTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $materi = Materi::create([
            'judul' => 'Adaptasi Kebiasaan Baru',
            'nip'=> '1805037',
            'video'=> 'adaptasi.mp4',
            'kategori' => 'Covid 19',
            'foto' => 'adaptasi.jpg',
            'deskripsi' => 'Pada masa pandemi covid 19 ............',
           ]);
        $this->assertDatabaseHas('materis',[
            'judul' => 'Adaptasi Kebiasaan Baru',
            'nip' => '1805037',
            'video' => 'adaptasi.mp4',
            'kategori' => 'Covid 19',
            'foto' => 'adaptasi.jpg',
            'deskripsi' => 'Pada masa pandemi covid 19 ............',
        ]);
    }
}
