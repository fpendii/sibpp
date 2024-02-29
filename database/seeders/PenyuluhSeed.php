<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyuluhSeed extends Seeder
{
    
    
    public function run()
    {   
        DB::table('penyuluh')->insert([
            [
                'nama' => 'Pendi',
                'alamat' => 'Pemalongan 2',
                'nomer_hp' => '082150646254',
                'level' => 'admin'
            ],
            [
                'nama' => 'Ferdi',
                'alamat' => 'Pelaihari',
                'nomer_hp' => '082392472392',
                'level' => 'super_admin'
            ],
        ]);
    }
}
