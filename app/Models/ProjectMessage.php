<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMessage extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class); // ユーザーに所属する
    }
    public function project()
    {
        return $this->belongsTo(Project::class); // クリエイターに所属する
    }
}
