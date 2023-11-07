<?php

declare(strict_types=1);

interface SearchQueryContract
{
    public function getAllByQuery(?string $query): Collection;

    public function getAllBySearchId(?int $searchId): Collection;
}