<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Todo\TodoRepository;
use Illuminate\Support\Collection;

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

        return view("todo",["todos"=>$todos]);
    }
}