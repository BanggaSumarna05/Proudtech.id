<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = [
            [
                'title' => 'Fokus Hasil',
                'description' => 'Kami tidak hanya membangun fitur; kami membangun mesin pertumbuhan yang meningkatkan ROI Anda.',
                'icon' => 'fas fa-chart-line',
                'order' => 1,
            ],
            [
                'title' => 'Keamanan Sistem',
                'description' => 'Arsitektur kelas dunia yang memastikan data Anda aman dan performa sistem tetap stabil 24/7.',
                'icon' => 'fas fa-shield-alt',
                'order' => 2,
            ],
            [
                'title' => 'Partner Strategis',
                'description' => 'Kami adalah ekstensi dari tim Anda, fokus pada inovasi jangka panjang untuk skalabilitas bisnis.',
                'icon' => 'fas fa-handshake',
                'order' => 3,
            ],
        ];

        foreach ($benefits as $benefit) {
            \App\Models\Benefit::create($benefit);
        }
    }
}
