<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Building;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index')->with('rooms', $rooms);
    }

    public function create()
    {
        $buildings = Building::pluck('name', 'id');

        return view('rooms.create')->with('buildings', $buildings);
    }

    public function store(RoomRequest $request)
    {

        Room::create($request->all());

        toast('Room Added!', 'success');

        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);

        $buildings = Building::pluck('name', 'id');


        return view('rooms.edit')
            ->with('room', $room)
            ->with('buildings', $buildings);
    }

    public function update(RoomRequest $request, $id)
    {
        $room = Room::findOrFail($id);

        $room->update($request->all());

        toast('Room Updated!', 'success');

        return redirect()->route('rooms.index');
    }

    public function delete($id)
    {

    }
}
