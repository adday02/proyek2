<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Dokumen;
use Tests\TestCase;

class DokumenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $dokumen = Dokumen::create([
            'judul' => '4 Sehat 5 Sempurna',
            'nip' => '1805030',
            'pdf' => '4_Sehat_5_Sempurna.pdf',
            'kategori' => 'anak-anak'
           ]);
        $this->assertDatabaseHas('dokumens',[
            'judul' => '4 Sehat 5 Sempurna',
            'nip' => '1805030',
            'pdf' => '4_Sehat_5_Sempurna.pdf',
            'kategori' => 'anak-anak'
        ]);
    }
}
