<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\models\Masyarakat;
use Tests\TestCase;

class MasyarakatTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $masyarakat = Masyarakat::create([
            'nik' => '1122334455667787',
            'nama' => 'Kosong',
            'password' => '1122334455667787',
            'jk' => 'Kosong',
            'tl' => '0001-01-01',
            'no_hp' => 'Kosong',
            'alamat' => 'Kosong',
            'foto' => 'Kosong.jpg',
            'alamat' => 'Kosong',
           ]);
        $this->assertDatabaseHas('masyarakats',[
            'nik' => '1122334455667787',
            'nama' => 'Kosong',
            'password' => '1122334455667787',
            'jk' => 'Kosong',
            'tl' => '0001-01-01',
            'no_hp' => 'Kosong',
            'alamat' => 'Kosong',
            'foto' => 'Kosong.jpg',
            'alamat' => 'Kosong',
        ]);
    }
}
