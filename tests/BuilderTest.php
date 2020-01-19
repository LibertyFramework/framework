<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Builder;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $builder = new Builder([], getcwd());
        $this->assertInstanceOf(Builder::class, $builder);
    }
}
