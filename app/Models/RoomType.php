<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "photos",
        "price_per_night"
    ];

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
