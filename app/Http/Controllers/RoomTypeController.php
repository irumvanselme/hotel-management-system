<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Exception;
use Faker\Factory;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomTypeController extends Controller
{
    public function index(){
        $room_types = RoomType::all();
        return view("rooms.types.index", compact("room_types"));
    }

    public function all(){
        return RoomType::all();
    }

    public function show(RoomType $roomType): RoomType
    {
        return $roomType;
    }

    public function create(){
        return view("rooms.types.new");
    }

    public function store(Request $request) {
        Validator::make((array)$request, [
            "name" => "required|string|min:3",
            "description" => "required|string|min:3",
            "photos" => "required",
            "price_per_night" => "required|int",
        ]);

        $request->all()["photos"] = [
            "https://via.placeholder.com/640x480.png/004466?text=ab"
        ];

        RoomType::query()->create($request->all());

        $room_types = RoomType::all();

        return view("/rooms.types.index", compact("room_types"));
    }

    public function update(Request $request, RoomType $roomType)
    {
        $valid = Validator::make((array)$request, [
            "name" => "required|string|min:3",
            "description" => "required|string|min:3",
            "photos" => "required|array",
            "price_per_night" => "required|int",
        ]);

        if($valid->fails())
            return $valid;

        return $roomType->update(((array)$request));
    }

    public function delete(RoomType $roomType): ?bool
    {
        try {
            return $roomType->delete();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function factory(){
        return RoomType::factory()->count(5)->create();
    }
}
