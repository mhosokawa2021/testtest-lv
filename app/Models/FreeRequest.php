<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeRequest extends Model
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

    public function freeRequestProcs()
    {
        return $this->hasMany(FreeRequestProc::class); // freeRequestはfreeRequestProcを複数持てる
    }
}
