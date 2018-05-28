<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Place;
use App\Task;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::query()
            ->where('dormitory_number' , auth()->user()->dormitory_number)
            ->paginate(6);
        $tasks = Task::query()->get();
        return view('places.index', compact('places','tasks'));
    }

    public function store(PlaceRequest $request)
    {
        $data            = $request->validated();
        $data['dormitory_number'] = auth()->user()->dormitory_number;
        Place::query()->create($data);
        return redirect()->route('places.index')->with('status', 'Запись добавлена');
    }
}
