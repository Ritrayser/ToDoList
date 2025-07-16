<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{

    protected $fillable = [
        'title',
        'user_id',
        'is_completed',

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function todoItem()
    {
        return $this->hasMany(TodoItem::class);
    }
}
