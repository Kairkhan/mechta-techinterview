<?php

declare(strict_types=1);

final class SearchDTO
{
    private ?string $query;
    private ?int $searchId;
    public static function fromRequest(Request $request): self
    {
        $self            = new self();
        $self->query     = $request->get('q');
        $self->searchId  = (int)$request->get('searchId');

        return $self;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function getSearchId(): ?int
    {
        return $this->searchId;
    }
}