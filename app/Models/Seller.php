<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phoneNumber',
        'address',
        'identificationType',
        'identificationNumber',
        'sector'
    ];
    
    public function Rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
