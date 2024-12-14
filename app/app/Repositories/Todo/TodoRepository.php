<?php

namespace App\Repositories\Todo;

use App\Repositories\Todo\Interface\TodoRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\Todo;
use App\Repositories\Todo\Exceptions\FailedGetTodosException;
use App\Repositories\Todo\Exceptions\FailedDeleteTodoException;

class TodoRepository implements TodoRepositoryInterface 
{
    public function getTodos() :Collection {
        $todos = Todo::get();

        if(!$todos) {
            throw new FailedGetTodosException();
        }

        return $todos;
    }

    public function createNewTodo(string $text): Todo 
    {
       return Todo::create([
        "text" => $text
       ]);
    }

    public function deleteTodo(int $id)
    {
        $todo = Todo::find($id);

        if(!$todo) {
            throw new FailedDeleteTodoException();
        }

        $todo->delete();

        return $todo;
    }
}