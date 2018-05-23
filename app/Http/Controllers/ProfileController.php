<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Image;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->get();
        return view('profile.index',compact('tasks'));
    }

    public function updateAva(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile.index');
    }
}
