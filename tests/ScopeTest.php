<?php

namespace DocForge\Framework\Tests;

use DocForge\Framework\Scope;
use PHPUnit\Framework\TestCase;

final class ScopeTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $scope = new class([], getcwd()) extends Scope {};
        $this->assertInstanceOf(Scope::class, $scope);
    }
}
