<?php

namespace DocForge\Framework\Tests\Scope;

use DocForge\Framework\Scope\PageTrait;
use PHPUnit\Framework\TestCase;

final class PageTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use PageTrait; };
        $this->assertContains(PageTrait::class, class_uses($object));
    }
}
