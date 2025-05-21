<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        return view('taskForm');
    }

    public function store(Request $request)
    {

        $request->validate([
            'task' => 'required',
            'dueDate' => 'required'
        ]);

        return view('showTask', [
            'task' => $request->task,
            'dueDate' => $request->dueDate
        ]);
    }
}
