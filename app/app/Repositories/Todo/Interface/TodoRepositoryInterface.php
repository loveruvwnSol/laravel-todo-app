<?php

namespace App\Repositories\Todo\Interface;

use App\Models\Todo;
use Illuminate\Support\Collection;

interface TodoRepositoryInterface {
    public function getTodos(): Collection;

    public function createNewTodo(string $text): Todo;

    public function deleteTodo(int $id);
}