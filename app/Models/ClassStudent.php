<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Datebase\Eloquent\Relations\BelongsTo;

class ClassStudent extends Model
{
    protected $fillable = [
        'class_id',
        'student_id',
        'enrolled_at',
    ];
    protected $casts = [
        'enrolled_at' => 'date',
    ];
    public function schoolClass(): BelongsTo {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
    public function student(): BelongsTo {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
