<?php

return [
    "name" => "stockify",

    "routing" => [
        "prefix" => "stockify",
        "middleware" => [
            "web",
            "auth"
        ]
    ]
];
