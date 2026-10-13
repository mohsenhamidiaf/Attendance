<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AttendanceSession extends Model
{
    protected $fillable = [
        'class_id',
        'date',
        'starts_at',
        'closes_at',
        'status',
        'created_by',
    ];
    
    protected $casts = [
        'date'      => 'date',
        'starts_at' => 'datetime',
        'closes_at' => 'datetime',
    ];
    
    public function schoolClass(): BelongsTo {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function attendances(): HasMany {
        return $this->hasMany(Attendance::class, 'attendance_session_id');
    }

    public function creator(): BelongsTo {
        return $this->belongsTo(User::class, 'create_by');
    }
}
