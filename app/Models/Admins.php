<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admins extends Model
{
    /** @use HasFactory<\Database\Factories\AdminsFactory> */
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'email',
        'email_verified_at',

    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }



    public function auditLogs()
    {
        return $this->hasMany(AuditLogs::class);
    }
}
