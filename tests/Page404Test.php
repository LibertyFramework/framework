<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Page404;
use PHPUnit\Framework\TestCase;

final class Page404Test extends TestCase
{
    public function testCreateAnInstance()
    {
        $page404 = new Page404(null, null);
        $this->assertInstanceOf(Page404::class, $page404);
    }
}
