<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class ,
            ServiceSeeder::class ,
            ProjectSeeder::class ,
            TestimonialSeeder::class ,
            SettingSeeder::class ,
            BenefitSeeder::class ,
            StatSeeder::class ,
            StandardSeeder::class ,
        ]);
    }
}
