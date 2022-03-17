<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorPlanProc extends Model
{
    use HasFactory;
    public function creatorPlan()
    {
        return $this->belongsTo(CreatorPlan::class); // creatorPlanProcはcreatorPlanを一つ持つ
    }
}
