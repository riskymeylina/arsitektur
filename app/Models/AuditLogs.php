<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLogs extends Model
{
    /** @use HasFactory<\Database\Factories\AuditLogsFactory> */
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'action',
        'description',
        'ip_address',
        'timestamp',
    ];

    public function admin()
    {
        return $this->belongsTo(Admins::class);
    }
}
