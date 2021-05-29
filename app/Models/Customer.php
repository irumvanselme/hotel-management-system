<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "gender",
        "phone",
        "email",
        "address"
    ];
}
