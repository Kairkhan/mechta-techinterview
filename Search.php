<?php

declare(strict_types=1);

final class Search
{
    public function __construct(
        private readonly SearchServiceContract $service
    ) {
    }

    public function doSearch(): void
    {
        $filters = SearchDTO::fromRequest(new Request());

        $result  = $this->service->getAll($filters);

        $this->renderSearchResults($result);
    }

    public function renderSearchResults($result): void
    {
        global $render;

        foreach($result as $row){
            if ($row['forumid'] != 5){
                $render->render_searh_result($row);
            }
        }
    }
}