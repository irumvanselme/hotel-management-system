<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index(){
        return view("pages.rooms.index", ["rooms" => Room::all()]);
    }

    public function all(){
        return Room::all();
    }

    public function show(Room $room): Room
    {
        return $room;
    }

    public function create(){
        $types = RoomType::all();
        return view("rooms.new", compact("types"));
    }

    public function store(Request $request){
        Validator::make((array)$request, [
            "room_type" => "required|string|exists_in:room_types",
            "room_number" => "required|string|min:3",
            "status" => "required|string|in:OPEN,OCCUPIED,NOT_AVAILABLE"
        ]);

        $type = RoomType::query()->findOrFail($request->get("room_type"));

        $type->rooms()->create($request->all());
        return view("rooms.index", ["rooms" => $this->all()]);
    }

    public function book(Room $room){
        return view("rooms.book", compact("room"));
    }

    public function update(Request $request, Room $room){
        $valid = Validator::make((array)$request, [
            "room_number" => "required|string|min:3",
            "status" => "required|string|in:OPEN,OCCUPIED,NOT_AVAILABLE"
        ]);

        if($valid->fails())
            return $valid;

        return $room->update(((array)$request));
    }

    public function delete(Room $room){
        try {
            return $room->delete();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
