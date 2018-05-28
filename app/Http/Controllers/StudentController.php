<?php

namespace App\Http\Controllers;

use App\HistoryStudent;
use App\Http\Requests\StudentRequest;
use App\Place;
use App\Student;
use App\Task;

class StudentController extends Controller
{
   public function index()
   {
    $students = Student::query()->get();
    $tasks = Task::query()->get();
    $places = Place::query()->whereColumn('count','>','busy')
                           ->get();
    return view('students.index', compact('students','tasks','places'));
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
      $students = Student::query()->create($request->validated());
      $place = Place::find($request->get('place'));

       HistoryStudent::query()->create([
           'name' => $request->name,
           'surname' => $request->surname,
           'patronymic' => $request->patronymic,
           'place' => $place->number,
           'status' => 'Поселен'
       ]);

       $students->places()
                ->attach($place);

       Place::query()->where('id',$place->id)
                     ->increment('busy');

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
       $place = Place::find($student->place);

       HistoryStudent::query()->create([
           'name' => $student->name,
           'surname' => $student->surname,
           'patronymic' => $student->patronymic,
           'place' => $student->place,
           'status' => 'Выселен'
       ]);

        Place::query()->where('id',$place->id)
                      ->decrement('busy');

        $student->places()
                ->detach($place);

       $student->delete();

       session()->flash('status', 'Студент выселен');
       return redirect()->back();
   }

}
