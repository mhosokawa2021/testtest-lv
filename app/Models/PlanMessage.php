<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanMessage extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class); // plan_messageはユーザを１つ持てる
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class); // plan_messageはPlanを１つ持てる
    }

}
