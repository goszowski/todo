<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\StoreRequest;
use App\Http\Requests\Tasks\UpdateRequest;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate();

        return response()->json([
            'tasks' => $tasks,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Task::create($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'task created',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json([
            'task' => $task,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Task $task)
    {
        $task->update($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'task updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'task deleted',
        ]);
    }
}
