<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolClass extends Model
{
    protected $table = 'classes';
    
    public function classStudents(): HasMany {
        return $this->hasMany(ClassStudent::class, 'class_id');
    }
    public function attendanceSessions(): HasMany {
        return $this->hasMany(attendanceSessions::class, 'class_id');
    }
}
