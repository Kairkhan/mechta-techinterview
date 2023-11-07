<?php

declare(strict_types=1);

interface DatabaseContract
{
    public function execute(string $query, array $params = []): Collection;
}