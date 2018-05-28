<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Phone;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::query()
            ->where('dormitory_number' , auth()->user()->dormitory_number)
            ->paginate(6);
        $tasks = Task::query()->get();
        return view('phones.index', compact('phones','tasks'));
    }

    public function store(PhoneRequest $request)
    {
        $data            = $request->validated();
        $data['dormitory_number'] = auth()->user()->dormitory_number;
        Phone::query()->create($data);
        return redirect()->route('phones.index')->with('status', 'Запись добавлена');
    }

    public function edit($id)
    {
        $tasks = Task::query()->get();
        $phone= Phone::find($id);
        return view('phones.edit',compact('phone','tasks'));
    }

    public function update($id, PhoneRequest $request)
    {
        Phone::find($id)->update($request->validated());
        return redirect()->route('phones.index');
    }

    public function destroy($id)
    {
        Phone::find($id)->delete();
        session()->flash('status', 'Запись удалена');
        return redirect()->back();
    }
}
