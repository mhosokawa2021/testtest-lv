<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectProc extends Model
{
    use HasFactory;

    protected $fillable = [
        'sort_order',
        'proc_name',
        'proc_name_order',
        'img_url',
        'is_checked',
        'is_canceled',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class); // クリエイターに所属する
    }
}
