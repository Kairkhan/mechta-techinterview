<?php


return [
    "mysql" => [
        "host"     => env("DATABASE_HOST", "127.0.0.1"),
        "port"     => env("DATABASE_PORT", "3306"),
        "dbname"   => env("DATABASE_NAME", "test"),
        "username" => env("DATABASE_USERNAME", "root"),
        "password" => env("DATABASE_PASSWORD", "root")
    ]
];
