<?php

namespace App\Http\Controllers;

use App\HistoryStudent;
use App\Task;
use Illuminate\Http\Request;

class HistoryStudentController extends Controller
{
 public function index()
 {
     $history = HistoryStudent::query()->get();
     $tasks = Task::query()->get();
     return view('history.index',compact('history','tasks'));
 }

}
