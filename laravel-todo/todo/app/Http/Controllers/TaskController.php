<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
/*
    public function index(){
        $tasks = [];
        for($i = 0; $i < 10; $i++){
            $task = new \stdClass();
            $task -> title = 'Task '.($i+1);
            $tasks[] = $task;
        }
        $data =[
            'tasks' => $tasks,
        ];
        return view('tasks.index', $data);
    }
    */
    public function index(){
        $tasks = Task::orderBy('created_at','DESC')->get();
        $data =['tasks' => $tasks];
        return view('tasks.index', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required'
        ]);
        Task::create($request ->all());
        return redirect('/');
    }

    public function update(Task $task){
        $task->completed=true;
        $task->save();
        return redirect('/');
    }

    public function destory(Task $task){

        $task->delete();
        return redirect('/');
    }
}
