<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Task};
use Log;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (auth()->attempt($credentials)) {
            return redirect('/task');
        }

        return back();
    }

    public function viewTask() {
        
        if(auth()->user()->role == 'staff'){
            $user_id = auth()->user()->id;
            $tasks = Task::where('user_id',$user_id)->get();
        }else {
            $tasks = DB::table('tasks as t')->select('t.id','t.task','t.status','u.name')->
            leftjoin('users as u', 't.user_id','u.id')->get();
        }
        return view('task',compact('tasks'));
    }

    public function addTask() {

        $users = User::where('role','staff')->get();
        return view('add_task',compact('users'));
    }

    public function createTask(Request $request) {

        $task = (string) $request->task;
        $user_id = (int) $request->user;
        $user= Task::create([
            'task' => $task,
            'user_id' => $user_id,
            'status' => 0
        ]);

        return back()->with('success_message','created successfully');
    }

    public function statusUpdate(Request $request) {

        $id = $request->id;
        $status = $request->status;
        $update = Task::where('id',$id)->update([
            'status' => $status
        ]);

        return 1;
    }
}

