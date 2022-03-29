<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'creator_id',
        'is_finished',
        'is_canceled'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // ユーザーに所属する
    }
    
    public function creator()
    {
        return $this->belongsTo(Creator::class); // クリエイターに所属する
    }

    public function projectProcs()
    {
        return $this->hasMany(ProjectProc::class);
    }

    public function projectMessages() 
    {
        return $this->hasMany(ProjectMessage::class); // ユーザはPlanRequestを複数持てる
    }
}
