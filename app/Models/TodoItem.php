<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable = [
        'title',
        'sort',
        'description',
        'todo_list_id',
        'is_completed',

    ];
      public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
