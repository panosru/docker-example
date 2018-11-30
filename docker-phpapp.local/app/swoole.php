<?php
declare(strict_types=1);

$http = new swoole_http_server("0.0.0.0", 6778);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:6778\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World from Swoole!\n");
});

$http->start();
