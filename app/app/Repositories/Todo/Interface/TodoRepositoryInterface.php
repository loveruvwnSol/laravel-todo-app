<?php

namespace App\Repositories\Todo\Interface;

use Illuminate\Support\Collection;

interface TodoRepositoryInterface {
    public function getTodos(): Collection;
}