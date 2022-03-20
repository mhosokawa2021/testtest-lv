<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequest extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class); // ユーザーに所属する
    }
    
    public function creator()
    {
        return $this->belongsTo(Creator::class); // クリエイターに所属する
    }

    public function creatorPlan()
    {
        return $this->belongsTo(CreatorPlan::class); // creatorPlanProcはcreatorPlanを一つ持つ
    }
}