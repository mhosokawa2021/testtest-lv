<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequestProc extends Model
{
    use HasFactory;

    protected $fillable = [
        'sort_order',
        'proc_name',
        'proc_number_max',
        'proc_number_min',
        'plan_request_id'
    ];

    public function planRequest()
    {
        return $this->belongsTo(PlanRequest::class);
    }
}
