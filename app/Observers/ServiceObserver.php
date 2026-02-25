<?php

namespace App\Observers;

use App\Models\Service;

class ServiceObserver
{
    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        $service->logAction('create', "Created service: {$service->title}");
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        $changes = [
            'before' => array_intersect_key($service->getOriginal(), $service->getDirty()),
            'after' => $service->getDirty(),
        ];
        $service->logAction('update', "Updated service: {$service->title}", $changes);
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        $service->logAction('delete', "Deleted service: {$service->title}");
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
    //
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
    //
    }
}
