<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $standards = [
            [
                'title' => 'Kemurnian Teknis',
                'description' => 'Kami merancang untuk skalabilitas. Tanpa utang teknis, hanya repositori kode bersih berperforma tinggi.',
                'icon' => 'fas fa-microchip',
                'color' => 'blue',
                'order' => 1,
            ],
            [
                'title' => 'Niat Estetis',
                'description' => 'Setiap piksel diperhitungkan. Kami memadukan fungsionalitas dengan prinsip desain digital kelas atas.',
                'icon' => 'fas fa-swatchbook',
                'color' => 'indigo',
                'order' => 2,
            ],
            [
                'title' => 'Dominasi Pertumbuhan',
                'description' => 'Rekayasa berorientasi hasil yang fokus pada kecepatan konversi, metrik performa, dan dominasi SEO.',
                'icon' => 'fas fa-chart-line',
                'color' => 'purple',
                'order' => 3,
            ],
        ];

        foreach ($standards as $standard) {
            \App\Models\Standard::create($standard);
        }
    }
}
