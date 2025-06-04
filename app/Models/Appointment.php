<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id', 'staff_id', 'appointment_date', 'start_time', 'end_time', 'status', 'notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function staff() {
        return $this->belongsTo(User::class, 'staff_id');
    }
}

