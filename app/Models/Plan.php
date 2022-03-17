<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class); // プロジェクト計画はユーザを１つ持てる
    }
    /**
     * クリエイターidの取得
     */
    public function userCreator()
    {
        return $this->hasOneThrough(Creator::class, User::class); // planはuserを中継して一つのcreatorを持つ
    }
}
