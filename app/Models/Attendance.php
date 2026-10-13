<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    protected $fillable = [
        'attendance_session_id',
        'student_id',
        'status',
        'marked_by',
        'marked_at',
    ];
    protected $casts = [
        'marked_at' => 'datetime',
    ];

    public function attendanceSession(): BelongsTo {
        return $this->belongsTo(AttendanceSession::class, 'attendance_session_id');
    }

    public function student(): BelongsTo {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function marker(): BelongsTo {
        return $this->belongsTo(User::class, 'marked_by');
    }
}
