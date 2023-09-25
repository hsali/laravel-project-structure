<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $this->authorize('manage tasks');

        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->authorize('manage tasks');


//
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//        ])->validate();
//        $validated = $validator->validated();
//        dd($validated);
//        $validated = $validator->only(['name']);
        Task::create($request->only(["name"]));
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        $this->authorize('manage tasks');

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $this->authorize('manage tasks');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ])->validate();
        $validated = $validator->validated();
        $task->update($validated);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $this->authorize('manage tasks');

        $task->delete();

        return redirect()->route('tasks.index');
    }
}
