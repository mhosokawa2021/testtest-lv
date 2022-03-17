<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorPlan extends Model
{
    use HasFactory;
    public function creatorPlanProc() 
    {
        return $this->hasMany(CreatorPlanProc::class);
    }
    
    public function creator()
    {
        return $this->belongsTo(Creator::class); // クリエイターに所属する
    }
}
