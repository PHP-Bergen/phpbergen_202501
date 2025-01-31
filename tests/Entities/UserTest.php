<?php

namespace Phpbergen\Tests\Entities;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{

    /**
     * Method needs to start with the name `test`.
     */
    public function testThisIsTheFirstTest(): void
    {
        $this->assertSame('beer', 'beer');
    }

    /**
     * Use old school dockblock annotation.
     *
     * @test
     * @testdox This is the second test.
     */
    public function second(): void
    {
        $this->assertSame('beer', 'beer');
    }

    #[Test]
    #[TestDox('This is the third test.')]
    public function third(): void
    {
        $this->assertSame('beer', 'beer');
    }

}
