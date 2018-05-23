<?php

namespace App\Http\Controllers;

use App\HistoryStudent;
use App\Http\Requests\StudentRequest;
use App\Student;
use App\Task;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
   {
    $students = Student::query()->get();
    $tasks = Task::query()->get();
    return view('students.index', compact('students','tasks'));
   }

   public function show()
   {

   }

   public function create()
   {
       $tasks = Task::query()->get();
       return view('students.create',compact('tasks'));
   }

   public function store(StudentRequest $request)
   {
       Student::query()->create($request->validated());

       HistoryStudent::query()->create([
           'name' => $request->name,
           'surname' => $request->surname,
           'patronymic' => $request->patronymic,
           'place' => $request->place,
           'status' => 'Поселен'
       ]);

       return redirect()->route('students.index')
                        ->with('status', 'Студент успешно внесен в базу');
   }

   public function edit($id)
   {
       $tasks = Task::query()->get();
       $student = Student::find($id);
       return view('students.edit',compact('student','tasks'));
   }

    public function update($id, StudentRequest $request)
    {
        Student::find($id)->update($request->validated());
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
       $student = Student::find($id);
       HistoryStudent::query()->create([
           'name' => $student->name,
           'surname' => $student->surname,
           'patronymic' => $student->patronymic,
           'place' => $student->place,
           'status' => 'Выселен'
       ]);
       $student->delete();
       session()->flash('status', 'Студент выселен');
       return redirect()->back();
   }

}
