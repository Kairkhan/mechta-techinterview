<?php

declare(strict_types=1);

interface SearchServiceContract
{
    public function getAll(SearchDTO $filters): Collection;
}