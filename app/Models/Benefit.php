<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use \App\Traits\LogsActivity;

    protected $fillable = ['title', 'description', 'icon', 'order'];
}
