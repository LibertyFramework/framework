<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Functions;
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function testIsSlug()
    {
        $this->assertTrue(Functions::isSlug('a-slug-with-dash'));
    }

    public function testIsGlob()
    {
        $this->assertTrue(Functions::isGlob('a-glob-*'));
    }

    public function testSanitizeSlug()
    {
        $this->assertEquals(Functions::sanitizeSlug('a-strange-slug'), 'a-strange-slug');
    }

    public function testGetFileSlug()
    {
        $this->assertEquals(Functions::getFileSlug('a-file-name.ext'), 'a-file-name-ext');
    }
}
