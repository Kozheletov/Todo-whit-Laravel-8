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
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    // show one task
    public function show()
    {

    }

    // show page whit form for add task
    public function create()
    {
        return view('create');
    }

    // store task in database
    public function store()
    {
        // store task in database
    }

    // show form for edit task
    public function edit()
    {

    }

    // update task
    public function update()
    {

    }

    // delete task
    public function delete()
    {

    }
}
