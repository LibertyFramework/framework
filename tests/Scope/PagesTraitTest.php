<?php

namespace DocForge\Framework\Tests\Scope;

use DocForge\Framework\Scope\PagesTrait;
use PHPUnit\Framework\TestCase;

final class PagesTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use PagesTrait; };
        $this->assertContains(PagesTrait::class, class_uses($object));
    }
}
