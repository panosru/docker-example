<?php
declare(strict_types=1);

require_once dirname(__DIR__) . "/resources/vendor/autoload.php";

$loop = React\EventLoop\Factory::create();

$server = new React\Http\Server(function (Psr\Http\Message\ServerRequestInterface $request) {
    return new React\Http\Response(
        200,
        array('Content-Type' => 'text/plain'),
        "Hello World from ReactPHP!\n"
    );
});

$socket = new React\Socket\Server('0.0.0.0:6778', $loop);
$server->listen($socket);

echo "Server running at http://127.0.0.1:6778\n";

$loop->run();