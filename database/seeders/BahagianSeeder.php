<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bahagian;

class BahagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $senaraibahagian = [
            [
                'nama'      => 'Bahagian Khidmat Pengurusan',
                'kod'       => '601'
            ],
            [
                'nama'      => 'Pusat Bank Data Negara dan Inovasi',
                'kod'       => '607'
            ]
        ];

        Bahagian::insert($senaraibahagian);
    }
}
