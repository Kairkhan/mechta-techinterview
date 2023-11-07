<?php

declare(strict_types=1);

final class SearchService implements SearchServiceContract
{
    public function __construct(
        private readonly SearchQueryContract $searchQuery,
        private readonly LoggerContract $logger
    ) {
    }

    public function getAll(SearchDTO $filters): Collection
    {
        if ($filters->getQuery()) {
            $result = $this->searchQuery->getAllByQuery($filters->getQuery());

            $this->logger->log($result);

            return $result;
        }

        return $this->searchQuery->getAllBySearchId($filters->getSearchId());
    }
}