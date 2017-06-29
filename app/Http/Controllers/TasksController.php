<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function all(){
		
		$tasks = Task::all();
		
		return view('tasks.index',compact('tasks'));
		
	}
	
	public function one(Task $task){
		
		//return $task;
		
		//$task = Task::find($task);

		return view('tasks.show',compact('task'));
	}
}
