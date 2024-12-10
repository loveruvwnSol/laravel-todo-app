<?php

namespace App\Repositories\Todo;

use App\Repositories\Todo\Interface\TodoRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\Todo;
use App\Repositories\Todo\Exceptions\FailedGetTodosException;

class TodoRepository implements TodoRepositoryInterface 
{
    public function getTodos() :Collection {
        $todos = Todo::get();

        if(!$todos) {
            throw new FailedGetTodosException();
        }

        return $todos;
    }
}