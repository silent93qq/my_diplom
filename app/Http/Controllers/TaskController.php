<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index()
  {
      $tasks = Task::query()->paginate(10);
      return view('tasks.index',compact('tasks'));
  }

    public function store(TaskRequest $request)
    {
        Task::query()->create($request->validated());
        return redirect()->route('tasks.index')->with('status', 'Запись добавлена');
    }
}
