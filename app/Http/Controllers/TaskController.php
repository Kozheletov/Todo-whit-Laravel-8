<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    // show all tasks an homepage
    public function index()
    {
        $tasks = Task::take(10)->orderBy('updated_at', 'desc')->get();

        return view('tasks.index', compact('tasks'));
    }

    // show one task
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // show page whit form for add task
    public function create()
    {
        return view('tasks.create');
    }

    // store task in database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required|min:15'
        ]);

        Task::create([
            'task' => $validated['task']
        ]);

        return redirect()->route('tasks.home');
    }

    // show form for edit task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // update task
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'task' => 'required|min:15'
        ]);
        $task->update(['task' => $validated['task']]);

        return redirect()->route('tasks.home');
    }

    // delete task
    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.home');
    }
}
