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
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
