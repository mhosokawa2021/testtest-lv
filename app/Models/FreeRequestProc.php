<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeRequestProc extends Model
{
    use HasFactory;
    
    public function freeRequest()
    {
        return $this->belongsTo(FreeRequest::class); // FreeRequestに所属する
    }
}
