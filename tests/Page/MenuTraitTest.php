<?php

namespace DocForge\Framework\Tests\Page;

use DocForge\Framework\Page\MenuTrait;
use PHPUnit\Framework\TestCase;

final class MenuTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use MenuTrait; };
        $this->assertContains(MenuTrait::class, class_uses($object));
    }
}
