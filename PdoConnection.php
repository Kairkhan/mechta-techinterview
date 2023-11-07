<?php

declare(strict_types=1);

final class PdoConnection implements DatabaseContract
{
    private string $db;
    public function __construct()
    {
        $connectionString = sprintf(
            "mysql:dbname=%s;host=%s",
            config("database.mysql.dbname"),
            config("database.mysql.host"),
        );

        $userName = config("database.mysql.username");
        $password = config("database.mysql.password");

        $this->db = new PDO($connectionString, $userName, $password);
    }

    public function execute(string $query, array $params = []): Collection
    {
        $executableQuery = $this->db->prepare($query);
        $executableQuery->execute($params);

        return Collection::fromArray($executableQuery->fetchAll());
    }
}