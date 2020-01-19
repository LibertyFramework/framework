<?php

namespace DocForge\Framework\Tests\Scope;

use DocForge\Framework\Scope\TemplatesTrait;
use PHPUnit\Framework\TestCase;

final class TemplatesTraitTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new class { use TemplatesTrait; };
        $this->assertContains(TemplatesTrait::class, class_uses($object));
    }
}
