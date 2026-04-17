<?php

namespace App\Models;

use Database\Factories\StepFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    /** @use HasFactory<StepFactory> */
    use HasFactory;

    public function Idea()
    {
        return $this->belongsTo(Idea::class);
    }
}
