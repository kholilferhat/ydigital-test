<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_location_id',
        'day',
        'start_time',
        'end_time',
    ];

    public function clinicLocation()
    {
        return $this->belongsTo(ClinicLocation::class);
    }
}
