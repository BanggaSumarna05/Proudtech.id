<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            ['number' => '75+', 'label' => 'Implementasi Global', 'order' => 1],
            ['number' => '99%', 'label' => 'Waktu Aktif Sistem', 'order' => 2],
            ['number' => '12', 'label' => 'Spesialis Inti', 'order' => 3],
            ['number' => '24/7', 'label' => 'Pengawasan Teknis', 'order' => 4],
        ];

        foreach ($stats as $stat) {
            \App\Models\Stat::create($stat);
        }
    }
}
