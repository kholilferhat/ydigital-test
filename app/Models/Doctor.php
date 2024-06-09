<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_practice_year',
        'str_number',
        'clinical_interest',
        'image',
        'education',
    ];

    public function clinicLocations()
    {
        return $this->hasMany(ClinicLocation::class);
    }
}
