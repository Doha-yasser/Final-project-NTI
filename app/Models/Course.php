<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =
    [
        'title',
        'description',
        "start_date",
        "max_students",
        'instructor_id',
        'image',
        "video",
    ];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'enrollments');
    }
    public function getSeatsLeftAttribute(): int
    {
        return $this->max_students - $this->enrollments()->count();
    }

    public function getIsFullAttribute()
    {
        return $this->enrollments()->count() >= $this->max_students;
    }
    public function isEnrolled($id)
{
    return $this->students()->where('user_id', $id)->exists();
}

    public function scopeSearch($query, $request)
    {
        if ($request->filled('search'))
            return $query->where('title', 'like', '%' . $request->search . '%');

        return $query;
    }
    public function scopeDate($query, $request)
    {
        if ($request->filled('sort')) {
            if ($request->sort == 'new') {
                return $query->orderBy('created_at', 'desc');
            } else {
                return $query->orderBy('created_at', 'asc');
            }
        }

        return $query;
    }

    public function scopeFilter($query, $request)
    {
        return $query->search($request)->date($request);
    }
}
