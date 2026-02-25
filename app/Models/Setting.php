<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use \App\Traits\LogsActivity;

    protected $fillable = ['key', 'value'];

    /**
     * Get a setting value by key.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        return Cache::remember("setting_{$key}", 3600, function () use ($key, $default) {
            $setting = static::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Set or update a setting value by key.
     */
    public static function set(string $key, mixed $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
        Cache::forget("setting_{$key}");
    }

    /**
     * Build a WhatsApp URL with the configured number and message.
     */
    public static function whatsappUrl(string $customMessage = null): string
    {
        $number = static::get('whatsapp_number', '6281234567890');
        $message = $customMessage ?? static::get('whatsapp_message', 'Halo, saya ingin berkonsultasi tentang layanan Proud Tech.');
        return 'https://wa.me/' . preg_replace('/[^0-9]/', '', $number) . '?text=' . urlencode($message);
    }
}
