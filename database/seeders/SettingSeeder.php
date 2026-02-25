<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'company_name' => 'Proud Tech',
            'company_tagline' => 'Solusi Digital Premium & Rekayasa Perangkat Lunak Presisi',
            'company_email' => 'hello@proudtech.id',
            'company_address' => 'Jakarta, Indonesia',
            'company_logo' => null,
            'company_favicon' => null,
            'whatsapp_number' => '6281234567890',
            'whatsapp_message' => 'Halo Proud Tech! Saya tertarik dengan layanan Anda dan ingin berkonsultasi lebih lanjut.',
            'instagram' => 'https://instagram.com/proudtech.id',
            'linkedin' => 'https://linkedin.com/company/proudtech',
            'github' => 'https://github.com/proudtech',
            'meta_description' => 'Agensi digital spesialis pembangunan produk digital performa tinggi dan identitas brand premium. Kami membangun masa depan perdagangan dengan presisi dan desain elit.',
            'home_hero_title' => "Membangun <br> <span class=\"text-gradient\">Brand Digital</span> <br> <span class=\"text-white/40\">Yang Menghasilkan.</span>",
            'home_hero_subtitle' => 'Kami membantu bisnis berkembang melalui <span class="text-white">website premium</span>, <span class="text-white">sistem digital</span>, dan <span class="text-white">branding</span> siap scale yang dirancang untuk dominasi pasar.',
            'home_hero_cta_audit' => '🔥 Audit Website GRATIS',
            'home_hero_cta_discuss' => '💬 Diskusi Proyek 30 Menit',
            'home_cta_title' => 'Siap Membangun <br> <span class="text-gradient">Sistem Digital</span> <br> <span class="text-white/20">Yang Serius?</span>',
            'home_cta_subtitle' => 'Jangan biarkan kompetitor memimpin. Mulai rekayasa sistem Anda sekarang dengan bantuan ahli kami.',
            'about_hero_title' => 'Kami Merekayasa <br> <span class="text-gradient">Masa Depan</span> <br> <span class="text-white/40">Digital Anda.</span>',
            'about_hero_subtitle' => 'Proud Tech adalah kolektif strategis dan teknis yang berdedikasi untuk membangun produk digital yang melampaui ekspektasi pasar.',
            'about_narrative_title' => 'Misi Kami',
            'about_narrative_subtitle' => 'Digitalisasi Bukan Sekadar Opsi, <span class="text-blue-500">Ini Adalah Evolusi.</span>',
            'about_narrative_content' => 'Kami tidak hanya membangun website atau aplikasi. Kami merancang ekosistem digital yang memungkinkan bisnis Anda beroperasi pada tingkat yang lebih tinggi. Dengan fokus pada efisiensi teknis dan keunggulan visual, kami membantu brand bertransformasi menjadi pemimpin pasar digital.',
            'about_narrative_goal_title' => 'Tujuan Kami',
            'about_narrative_goal_desc' => 'Menjadi mitra teknologi utama bagi bisnis yang ingin mendominasi lanskap digital melalui inovasi tanpa henti.',
            'about_narrative_target_title' => 'Target Kami',
            'about_narrative_target_desc' => 'Memberikan ROI yang nyata melalui sistem yang dirancang secara khusus untuk kebutuhan unik setiap klien.',
            'about_standards_title' => 'Standar Kami',
            'about_standards_subtitle' => 'Prinsip yang Menjaga <span class="text-blue-500">Kualitas Setiap Produk.</span>',
            'contact_hero_title' => 'Mulai <span class="text-gradient">Koneksi.</span>',
            'contact_hero_subtitle' => 'Baik Anda sedang memperbesar kerajaan bisnis atau meluncurkan revolusi, spesialis kami siap membangun lintasan digital Anda.',
            'contact_interface_title' => 'Akses Prioritas',
            'contact_interface_subtitle' => 'Lewati saluran tradisional. Terhubung langsung dengan arsitek utama kami untuk konsultasi strategis yang cepat.',
            'contact_reply_latency' => 'Rata-rata latensi balasan: < 120 Menit',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
