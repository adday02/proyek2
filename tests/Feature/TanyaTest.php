<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\models\Tanya;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TanyaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $tanya = Tanya::create([
            'nip' => '1805037',
            'nik' => '2222266666456789',
            'pertanyaan' => 'Bagaimana cara menghindari virus covid 19 sedangkan saya harus bekerja di luar ruagan?',
            'jawaban' => 'Dengan cara menerapkan 3M yaitu memakai masker, mencuci tangan, menjaga jarak'
           ]);
        $this->assertDatabaseHas('tanyas',[
            'nip' => '1805037',
            'nik' => '2222266666456789',
            'pertanyaan' => 'Bagaimana cara menghindari virus covid 19 sedangkan saya harus bekerja di luar ruagan?',
            'jawaban' => 'Dengan cara menerapkan 3M yaitu memakai masker, mencuci tangan, menjaga jarak'
        ]);
    }
}
