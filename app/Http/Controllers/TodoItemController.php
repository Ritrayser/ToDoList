<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTodoListRequest;
use App\Http\Requests\UpdateTodoListRequest;
use App\Models\TodoItem;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todoItem = TodoItem::all();
        return response()->json($todoItem, 200);
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
    public function store(StoreTodoListRequest $request)
    {
        $todoItem = TodoItem::create($request->validated());
    return response()->json($todoItem, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(UpdateTodoListRequest $request, string $id)
    {
        
        $todoItem = TodoItem::findOrFail($id);
        $todoItem->update($request->validated());
        return response()->json($todoItem, 200);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todoItem = TodoItem::findOrFail($id);
        $todoItem->delete();
        return response()->json(null, 204);
    }

    public function completed (int $id)
    {
        $todoItem = TodoItem::findOrFail($id);
        $todoItem -> is_completed = true;
        $todoItem -> save();
        return response()->json($todoItem, 200);

    }

    public function uncompleted (int $id)
    {
        $todoItem = TodoItem::findOrFail($id);
        $todoItem -> is_completed = false;
        $todoItem -> save();
        return response()->json($todoItem, 200);

    }
}
