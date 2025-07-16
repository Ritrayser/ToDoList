<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreListRequest;
use App\Http\Requests\UpdateListRequest;
use App\Models\TodoList;


class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $todoList = TodoList::all();
        return response()->json($todoList, 200);
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
    public function store(StoreListRequest $request)
    {
        $todoList = TodoItem::create($request->validated());
    return response()->json($todoList, 201);
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
    public function update(UpdateListRequest $request, string $id)
    {
        $todoList = TodoList::findOrFail($id);
        $todoList->update($request->validated());
        return response()->json($todoList, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todoList = TodoList::findOrFail($id);
        $todoList->delete();
        return response()->json(null, 204);
    }

    public function completed (int $id)
    {
        $todoList = TodoList::findOrFail($id);
        $todoList -> is_completed = true;
        $todoList -> save();
        return response()->json($todoList, 200);

    }

    public function uncompleted (int $id)
    {
        $todoList = TodoList::findOrFail($id);
        $todoList -> is_completed = false;
        $todoList -> save();
        return response()->json($todoList, 200);

    }
}
