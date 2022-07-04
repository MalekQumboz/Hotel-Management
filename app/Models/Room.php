<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, Booking_room::class, 'room_id','booking_id' );
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'object', 'object_type', 'object_id', 'id');
    }
    public function images()
    {
        
        return $this->morphMany(Image::class, 'object', 'object_type', 'object_id', 'id');
    }
}
