<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * Get the activities for the subject.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
