<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    /**
     * Get the subject that owns the activity.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
