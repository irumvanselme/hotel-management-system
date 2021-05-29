<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "from",
        "nights",
        "comment"
    ];

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
