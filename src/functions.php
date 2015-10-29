<?php

namespace PhpMocks;

function doSomething(Dependency $d)
{
    $d->expectedCall();
}

function doNothing(Dependency $d)
{
    return 42;
}
