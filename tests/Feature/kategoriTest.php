<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Kategori;
use Tests\TestCase;

class kategoriTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $kategori = Kategori::create([
            'nama' => 'Anak-anak',
           ]);
        $this->assertDatabaseHas('kategoris',[
            'nama' => 'Anak-anak',
        ]);
    }
}
