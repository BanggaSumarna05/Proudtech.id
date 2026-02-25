<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        $project->logAction('create', "Created project: {$project->title}");
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        $changes = [
            'before' => array_intersect_key($project->getOriginal(), $project->getDirty()),
            'after' => $project->getDirty(),
        ];
        $project->logAction('update', "Updated project: {$project->title}", $changes);
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        $project->logAction('delete', "Deleted project: {$project->title}");
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
    //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
    //
    }
}
