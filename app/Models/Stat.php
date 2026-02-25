<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use \App\Traits\LogsActivity;

    protected $fillable = ['number', 'label', 'order'];
}
