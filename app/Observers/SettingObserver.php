<?php

namespace App\Observers;

use App\Models\Setting;

class SettingObserver
{
    /**
     * Handle the Setting "created" event.
     */
    public function created(Setting $setting): void
    {
        $setting->logAction('create', "Created setting: {$setting->key}");
    }

    /**
     * Handle the Setting "updated" event.
     */
    public function updated(Setting $setting): void
    {
        $changes = [
            'before' => array_intersect_key($setting->getOriginal(), $setting->getDirty()),
            'after' => $setting->getDirty(),
        ];
        $setting->logAction('update', "Updated setting: {$setting->key}", $changes);
    }

    /**
     * Handle the Setting "deleted" event.
     */
    public function deleted(Setting $setting): void
    {
    //
    }

    /**
     * Handle the Setting "restored" event.
     */
    public function restored(Setting $setting): void
    {
    //
    }

    /**
     * Handle the Setting "force deleted" event.
     */
    public function forceDeleted(Setting $setting): void
    {
    //
    }
}
