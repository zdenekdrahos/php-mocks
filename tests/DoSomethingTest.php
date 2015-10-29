<?php

namespace PhpMocks;

class DoSomethingTest extends \PHPUnit_Framework_TestCase
{
    /** @group nomock */
    public function testNoMock()
    {
        $d = new Dependency();
        doSomething($d);
    }

    /** @group prophecy */
    public function testProphecy()
    {
        $d = $this->prophesize(Dependency::class);
        $d->expectedCall()->shouldBeCalled();
        doSomething($d->reveal());
    }

    /** @group mockery */
    public function testMockery()
    {
        $d = \Mockery::mock(Dependency::class);
        $d->shouldReceive('expectedCall')->once();
        doSomething($d);
        \Mockery::close();
    }

    /** @group phake */
    public function testPhake()
    {
        $d = \Phake::mock(Dependency::class);
        doSomething($d);
        \Phake::verify($d)->expectedCall();
    }

    /** @group phpunit */
    public function testPhpunit()
    {
        $d = $this->getMock(Dependency::class);
        $d->expects($this->once())->method('expectedCall');
        doSomething($d);
    }

    /** @group mockista */
    public function testMockista()
    {
        $mockista = new \Mockista\Registry();
        $d = $mockista->create(Dependency::class);
        $d->expects('expectedCall')->once();
        doSomething($d);
        $mockista->assertExpectations();
    }
}
