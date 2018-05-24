<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $place = Place::query()
            ->where('user_id' , auth()->id())
            ->paginate(6);
        $tasks = Task::query()->get();
        return view('places.index', compact('place','tasks'));
    }
}
