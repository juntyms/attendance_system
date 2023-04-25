<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Building;
use App\Models\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CoordinatorController extends Controller
{
    public function delete($id)
    {
        Coordinator::destroy($id);

        toast('Coordinator Removed','error');

        return redirect()->route('buildings.index');
    }

    public function assign($buildingId)
    {
        $building = Building::find($buildingId);

        $users = User::whereHas('coordinator', function(Builder $query) use ($buildingId){
                $query->where('building_id','=', $buildingId);
        })->get();

        $userselect = User::whereDoesntHave('coordinator', function(Builder $query) use ($buildingId){
                $query->where('building_id','=', $buildingId);
        })->get();

        return view('coordinators.assign')
                ->with('users',$users)
                ->with('userselect',$userselect)
                ->with('building', $building);
    }

    public function saveassign(Request $request, $buildingId)
    {
        $user = User::findOrFail($request->user_id);

        $user->assignRole('coordinator');

        Coordinator::create(['building_id'=> $buildingId,'user_id'=>$request->user_id]);

        return redirect()->route('buildings.index');
    }
}