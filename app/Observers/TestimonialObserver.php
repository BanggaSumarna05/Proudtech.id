<?php

namespace App\Observers;

use App\Models\Testimonial;

class TestimonialObserver
{
    /**
     * Handle the Testimonial "created" event.
     */
    public function created(Testimonial $testimonial): void
    {
        $testimonial->logAction('create', "Created testimonial from: {$testimonial->name}");
    }

    /**
     * Handle the Testimonial "updated" event.
     */
    public function updated(Testimonial $testimonial): void
    {
        $changes = [
            'before' => array_intersect_key($testimonial->getOriginal(), $testimonial->getDirty()),
            'after' => $testimonial->getDirty(),
        ];
        $testimonial->logAction('update', "Updated testimonial from: {$testimonial->name}", $changes);
    }

    /**
     * Handle the Testimonial "deleted" event.
     */
    public function deleted(Testimonial $testimonial): void
    {
        $testimonial->logAction('delete', "Deleted testimonial from: {$testimonial->name}");
    }

    /**
     * Handle the Testimonial "restored" event.
     */
    public function restored(Testimonial $testimonial): void
    {
    //
    }

    /**
     * Handle the Testimonial "force deleted" event.
     */
    public function forceDeleted(Testimonial $testimonial): void
    {
    //
    }
}
