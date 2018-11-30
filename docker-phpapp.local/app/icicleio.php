<?php
declare(strict_types=1);

require_once dirname(__DIR__) . "/resources/vendor/autoload.php";

use Icicle\Http\Message\{BasicResponse, Request, Response};
use Icicle\Http\Server\{RequestHandler, Server};
use Icicle\Socket\Socket;
use Icicle\Loop;

$server = new Server(new class implements RequestHandler {
    public function onRequest(Request $request, Socket $socket)
    {
        $response = new BasicResponse(Response::OK, [
            'Content-Type' => 'text/plain',
        ]);

        yield from $response->getBody()->end('Hello, world from Icicleio!');

        yield $response;
    }

    public function onError($code, Socket $socket)
    {
        return new BasicResponse($code);
    }
});

$server->listen(6778,'0.0.0.0');

Loop\run();
