<?php

namespace App\Repositories\Todo\Exceptions;

use RuntimeException;
use App\Exceptions\HttpExceptionInterface;

class FailedGetTodosException extends RuntimeException implements HttpExceptionInterface 
{
    public function getStatusCode(): int
    {
        return 500;
    }

    public function getResponseJSON(): array 
    {
        return ["message" => "タスクを取得できませんでした。"];
    }

}