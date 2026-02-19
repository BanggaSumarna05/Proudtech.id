<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Website Development',
                'slug' => 'website-development',
                'description' => 'Kami membangun website profesional yang modern, cepat, dan responsif untuk bisnis Anda. Dari landing page hingga platform enterprise.',
                'icon' => 'globe',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Web Application',
                'slug' => 'web-application',
                'description' => 'Pengembangan aplikasi web custom yang scalable, aman, dan sesuai kebutuhan bisnis spesifik Anda.',
                'icon' => 'code',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'description' => 'Desain antarmuka pengguna yang intuitif, menarik, dan berfokus pada konversi untuk meningkatkan pengalaman pengguna.',
                'icon' => 'palette',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'E-Commerce Solutions',
                'slug' => 'e-commerce-solutions',
                'description' => 'Platform toko online lengkap dengan manajemen produk, pembayaran digital, dan dashboard analytics terintegrasi.',
                'icon' => 'shopping-cart',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'CMS Development',
                'slug' => 'cms-development',
                'description' => 'Sistem manajemen konten custom yang mudah dikelola tanpa keahlian teknis khusus.',
                'icon' => 'layout',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Maintenance & Support',
                'slug' => 'maintenance-support',
                'description' => 'Layanan pemeliharaan, update, dan dukungan teknis berkelanjutan untuk memastikan performa optimal.',
                'icon' => 'shield-check',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
