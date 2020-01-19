<?php

namespace DocForge\Framework\Tests\Scope;

use DocForge\Framework\Scope\CacheTrait;
use PHPUnit\Framework\TestCase;

final class CacheTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use CacheTrait; };
        $this->assertContains(CacheTrait::class, class_uses($object));
    }
}
