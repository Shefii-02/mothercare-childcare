<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;


    function getstatusHtmlAttribute(){
        return $this->status == 1 ? 'Active' : 'In active';
    }


    function availabilities(){
        return $this->hasMany(DoctorsAvailability::class, 'doctor_id', 'id');
    }
}
