<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return redirect('/index');
    }
    public function store(Request $request)
    {
        $post = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);
        return redirect('/index');
    }
    public function update()
    {

    }
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/index');
    }

}
