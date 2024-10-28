<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{

    private $tasks;

    function __construct(Task $tasks){
        $this->tasks = $tasks;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $task = $this->tasks->all();
        return response()->json($task, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $data = $request->validated();
        $task =$this->tasks->create($data);
        return response()->json($task, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = $this->tasks->findOrFail($id);
        return response()->json($task, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        $data = $request->validated();
        $task = $this->tasks->findOrFail($id);
        $task->update($data);
        return response()->json($task, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = $this->tasks->findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Tarefa deletada com sucesso!'], Response::HTTP_OK);
    }
}
