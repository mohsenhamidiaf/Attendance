<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        'student_number',
        'name',
        'father_name',
        'is_active',
    ];
    public function classStudents(): HasMany {
        return $this->hasMany(classStudents::class, 'student_id');
    }
    public function attendances(): HasMany {
        return $this->hasMany(attendance::class, 'student_id');
    }
}
