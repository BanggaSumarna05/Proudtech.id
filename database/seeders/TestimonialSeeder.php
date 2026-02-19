<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'company' => 'PT Rekrut Digital Indonesia',
                'position' => 'CEO & Founder',
                'message' => 'Proud Tech benar-benar melampaui ekspektasi kami. Platform SiapKerja yang mereka bangun memiliki performa luar biasa dan UI yang sangat intuitif. Tim mereka responsif dan sangat profesional.',
                'rating' => 5,
                'is_published' => true,
            ],
            [
                'name' => 'Dewi Anggraini',
                'company' => 'CV Maju Bersama',
                'position' => 'Owner',
                'message' => 'Sistem POS yang dibuat Proud Tech sangat membantu operasional warung kami. Mudah digunakan, stabil, dan bisa diakses dari mana saja. Sangat direkomendasikan!',
                'rating' => 5,
                'is_published' => true,
            ],
            [
                'name' => 'I Gede Putra Wirawan',
                'company' => 'Bali Digital Tourism',
                'position' => 'CTO',
                'message' => 'Kolaborasi yang sangat menyenangkan. Proud Tech paham betul kebutuhan bisnis kami dan mengeksekusinya dengan sempurna. Aplikasi BaliStay kini menjadi andalan kami.',
                'rating' => 5,
                'is_published' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::firstOrCreate(['name' => $testimonial['name']], $testimonial);
        }
    }
}
