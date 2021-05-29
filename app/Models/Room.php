<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_number",
        "status"
    ];

    public function room_type(){
        return $this->belongsTo(RoomType::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
