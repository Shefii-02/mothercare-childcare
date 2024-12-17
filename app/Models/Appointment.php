<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;


    function service(){
        return $this->hasOne(Service::class,  'id', 'service_id');
    }

    function doctor(){
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

}
