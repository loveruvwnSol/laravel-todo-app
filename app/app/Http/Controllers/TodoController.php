<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\CreateNewTodoRequest;
use App\Repositories\Todo\TodoRepository;

class TodoController extends Controller
{
    private TodoRepository $TodoRepo;

    public function __construct(TodoRepository $TodoRepo)
    {
        $this->TodoRepo = $TodoRepo;
    }

    public function getTodos()
    {
        $todos = $this->TodoRepo->getTodos();

        return view("todo",["todos" => $todos]);
    }

    public function createNewTodo(CreateNewTodoRequest $request)
    {
        $this->TodoRepo->createNewTodo(
            $request->validated("text")
        );

        return redirect("/todos");
    }

    public function deleteTodo($id)
    {
        $this->TodoRepo->deleteTodo($id);

        return redirect("/todos");
    }
}