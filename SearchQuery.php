<?php

declare(strict_types=1);

final class SearchQuery implements SearchQueryContract
{
    public function __construct(
      private readonly DatabaseContract $database
    ) {
    }

    public function getAllByQuery(?string $query): Collection
    {
        return $this->database->execute("SELECT * FROM vb_post WHERE text like ?", [
            $query
        ]);
    }

    public function getAllBySearchId(?int $searchId): Collection
    {
        return $this->database->execute("SELECT * FROM vb_searchresult WHERE searchid =?", [
            $searchId
        ]);
    }
}