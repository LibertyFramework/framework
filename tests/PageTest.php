<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Page;
use PHPUnit\Framework\TestCase;

final class PageTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $page = new Page(null, null);
        $this->assertInstanceOf(Page::class, $page);
    }
}
