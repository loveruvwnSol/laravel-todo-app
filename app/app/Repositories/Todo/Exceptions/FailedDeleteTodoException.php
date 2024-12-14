<?php

namespace App\Repositories\Todo\Exceptions;

use App\Exceptions\HttpExceptionInterface;
use RuntimeException;

class FailedDeleteTodoException extends RuntimeException implements HttpExceptionInterface
{
    public function getStatusCode(): int
    {
        return 500;
    }

    public function getResponseJSON(): array
    {
        return ["message" => "Failed to delete task"];
    }
}