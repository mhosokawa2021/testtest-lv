<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets() 
    {
        return $this->hasMany(Tweet::class); // ユーザはツイートを複数持てる
    }

    public function plants() 
    {
        return $this->hasMany(Plan::class); // ユーザはプロジェクトを複数持てる
    }

    public function planMessages() 
    {
        return $this->hasMany(PlanMessage::class); // ユーザはPlanMessageを複数持てる
    }
    
    public function planRequests() 
    {
        return $this->hasMany(PlanRequest::class); // ユーザはPlanRequestを複数持てる
    }

    public function projects() 
    {
        return $this->hasMany(Project::class); // ユーザはPlanRequestを複数持てる
    }

    public function projectMessages() 
    {
        return $this->hasMany(ProjectMessage::class); // ユーザはPlanRequestを複数持てる
    }

    public function creator()
    {
        return $this->hasOne(Creator::class); // ユーザはクリエイターを１つ持つ
    }
}
