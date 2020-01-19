<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Server;
use PHPUnit\Framework\TestCase;

final class ServerTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $server = new Server([], getcwd());
        $this->assertInstanceOf(Server::class, $server);
    }
}
