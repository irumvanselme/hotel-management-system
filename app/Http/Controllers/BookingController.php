<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request, Room $room){
        Validator::make($request->all(), [
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "gender" => "required|in:Male,Female",
            "phone" => "required|string",
            "email" => "required|email",
            "address" => "required|string",
            "from" => "required|date",
            "nights" => "required|integer",
            "comment" => "required|string"
        ]);

        $customer = Customer::query()->create($request->all());

        $request->all()["customer_id"] = $customer->_id;

        return $room->bookings()->create([
            "customer_id" => $customer->_id,
            "from" => $request->get("from"),
            "nights" => $request->get("nights"),
            "comment" => $request->get("comment")
        ]);
    }
}
