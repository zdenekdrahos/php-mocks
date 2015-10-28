<?php

namespace PhpMocks;

class Test extends \PHPUnit_Framework_TestCase
{
    /** @group nomock */
    public function testNoMock()
    {
        $d = new Dependency();
        doSomething($d);
    }
}
