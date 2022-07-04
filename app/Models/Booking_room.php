<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_room extends Model
{
    use HasFactory;
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Order::class, 'room_id', 'id');
    }
}
