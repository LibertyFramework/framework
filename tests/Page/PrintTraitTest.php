<?php

namespace DocForge\Framework\Tests\Page;

use DocForge\Framework\Page\PrintTrait;
use PHPUnit\Framework\TestCase;

final class PrintTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use PrintTrait; };
        $this->assertContains(PrintTrait::class, class_uses($object));
    }
}
