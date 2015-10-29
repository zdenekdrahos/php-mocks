<?php

namespace PhpMocks;

class DoNothingTest extends \PHPUnit_Framework_TestCase
{
    /** @group nomock */
    public function testNoMock()
    {
        $d = new Dependency();
        $this->shouldDoNothing($d);
    }

    /** @group prophecy */
    public function testProphecy()
    {
        $d = $this->prophesize(Dependency::class);
        $this->shouldDoNothing($d->reveal());
    }

    /** @group mockery */
    public function testMockery()
    {
        $d = \Mockery::mock(Dependency::class);
        $this->shouldDoNothing($d);
        \Mockery::close();
    }

    /** @group phake */
    public function testPhake()
    {
        $d = \Phake::mock(Dependency::class);
        $this->shouldDoNothing($d);
        \Phake::verifyNoOtherInteractions($d);
    }

    /** @group phpunit */
    public function testPhpunit()
    {
        $d = $this->getMock(Dependency::class);
        $this->shouldDoNothing($d);
        $this->fail('Test always passes when method is not expected - https://github.com/sebastianbergmann/phpunit-mock-objects/issues/65');
    }

    /** @group mockista */
    public function testMockista()
    {
        $mockista = new \Mockista\Registry();
        $d = $mockista->create(Dependency::class);
        $this->shouldDoNothing($d);
        $mockista->assertExpectations();
    }

    private function shouldDoNothing(Dependency $d)
    {
        $this->assertEquals(42, doNothing($d));
    }
}
