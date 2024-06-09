<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'location_name',
        'address',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function practiceSchedules()
    {
        return $this->hasMany(PracticeSchedule::class);
    }
}
