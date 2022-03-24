<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequestProc extends Model
{
    use HasFactory;
    public function planRequest()
    {
        return $this->belongsTo(PlanRequest::class);
    }
}
