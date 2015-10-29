<?php

namespace PhpMocks;

class DoNothingTest extends \PHPUnit_Framework_TestCase
{
    /** @group nomock */
    public function testNoMock()
    {
        $d = new Dependency();
        $this->assertEquals(42, doNothing($d));
    }

    /** @group prophecy */
    public function testProphecy()
    {
        $d = $this->prophesize(Dependency::class);
        $this->assertEquals(42, doNothing($d->reveal()));
    }

    /** @group mockery */
    public function testMockery()
    {
        $d = \Mockery::mock(Dependency::class);
        $this->assertEquals(42, doNothing($d));
        \Mockery::close();
    }

    /** @group phake */
    public function testPhake()
    {
        $d = \Phake::mock(Dependency::class);
        $this->assertEquals(42, doNothing($d));
    }

    /** @group phpunit */
    public function testPhpunit()
    {
        $d = $this->getMock(Dependency::class);
        $this->assertEquals(42, doNothing($d));
    }

    /** @group mockista */
    public function testMockista()
    {
        $mockista = new \Mockista\Registry();
        $d = $mockista->create(Dependency::class);
        $this->assertEquals(42, doNothing($d));
        $mockista->assertExpectations();
    }
}
