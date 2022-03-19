<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->hasOne(User::class); // クリエイターはユーザを１つ持つ
    }
    public function creatorPlan()
    {
        return $this->hasMany(CreatorPlan::class); 
    }

    public function planRequests() 
    {
        return $this->hasMany(PlanRequest::class); // ユーザはPlanRequestを複数持てる
    }
    public function projects() 
    {
        return $this->hasMany(Project::class); // ユーザはPlanRequestを複数持てる
    }
}
