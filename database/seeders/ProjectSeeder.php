<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'SiapKerja – Job Portal Platform',
                'slug' => 'siapkerja-job-portal',
                'overview' => 'Platform lowongan kerja modern yang menghubungkan pencari kerja dengan perusahaan terkemuka.',
                'description' => 'SiapKerja adalah platform rekrutmen digital yang kami bangun untuk memudahkan proses hiring. Dilengkapi dengan ATS (Applicant Tracking System), fitur pencarian lanjutan, dan notifikasi real-time.',
                'features' => ['Job Listing Management', 'Applicant Tracking System', 'Resume Parser', 'Email Notifications', 'Admin Dashboard', 'Mobile Responsive'],
                'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'Tailwind CSS', 'AWS S3'],
                'type' => 'client',
                'client_name' => 'PT Rekrut Digital Indonesia',
                'is_published' => true,
            ],
            [
                'title' => 'Warung Digital – POS & Inventory',
                'slug' => 'warung-digital-pos',
                'overview' => 'Sistem kasir digital lengkap untuk UMKM dan warung modern dengan fitur inventory otomatis.',
                'description' => 'Warung Digital adalah solusi POS berbasis web yang kami kembangkan untuk membantu para pelaku UMKM mengelola penjualan, stok, dan laporan keuangan secara digital dan mudah.',
                'features' => ['Point of Sale', 'Inventory Management', 'Financial Reports', 'Multi-user Access', 'Print Receipt', 'Offline Mode'],
                'tech_stack' => ['Laravel', 'Alpine.js', 'MySQL', 'Tailwind CSS', 'PWA'],
                'type' => 'client',
                'client_name' => 'CV Maju Bersama',
                'is_published' => true,
            ],
            [
                'title' => 'ProudCMS – Headless Content Platform',
                'slug' => 'proudcms-headless-platform',
                'overview' => 'Platform CMS headless internal Proud Tech untuk manajemen konten multi-channel.',
                'description' => 'ProudCMS adalah produk internal yang kami kembangkan sebagai backbone CMS headless untuk klien-klien kami. Mendukung multi-tenant, REST API, dan webhook integration.',
                'features' => ['Headless Architecture', 'REST API & GraphQL', 'Multi-tenant', 'Webhook Integration', 'Media Manager', 'Role-based Access'],
                'tech_stack' => ['Laravel', 'Filament', 'MySQL', 'Redis', 'Docker'],
                'type' => 'internal',
                'is_published' => true,
            ],
            [
                'title' => 'BaliStay – Travel Booking App',
                'slug' => 'balistay-travel-booking',
                'overview' => 'Aplikasi booking villa dan tour di Bali dengan integrasi payment gateway lokal.',
                'description' => 'BaliStay adalah platform travel tech yang kami bangun untuk memudahkan wisatawan memesan villa, tour, dan aktivitas di Bali. Terintegrasi dengan Midtrans untuk pembayaran lokal.',
                'features' => ['Property Listing', 'Real-time Booking', 'Payment Gateway (Midtrans)', 'Review System', 'Host Dashboard', 'SMS Notifications'],
                'tech_stack' => ['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS', 'Midtrans'],
                'type' => 'client',
                'client_name' => 'Bali Digital Tourism',
                'is_published' => true,
            ],
        ];

        foreach ($projects as $data) {
            $project = Project::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
