<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //show all tasks
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }
    //show form to create new task
    public function create()
    {
        return view('tasks.create');
    }
    //show for to edit a task
    public function edit(){

    }
    //store new task
    public function store() {
        
    }

    //update a task
    public function update() {
        
    }
    //delete a task
    public function destroy() {
        
    }
}
