<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $fillable = ['name'];

    public function setUpdatedAtAttribute($value)
    {
        // By doing nothing I disable update_at column
    }
}
