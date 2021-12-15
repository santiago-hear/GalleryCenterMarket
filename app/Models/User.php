<?php

namespace App\Models;

use App\Models\Rol;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'rol_id',
        'name',
        'lastname',
        'email',
        'phone_number',
        'address',
        'identification_type',
        'identification_number',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::created(function ($user) {
            $user->update(['status' => \App\Models\Status\UnlockStatus::class]);
        });
    }

    public function changeStatus() : void
    {
        $this->status->handle();
    }

    public function getStatusAttribute($status)
    {
        return new $status($this);
    }
    
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
}
