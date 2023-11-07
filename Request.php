<?php

declare(strict_types=1);

final class Request
{
    private array $params;

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function get(string $key): mixed
    {
        return $this->params[$key];
    }
}