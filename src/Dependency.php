<?php

namespace PhpMocks;

class Dependency
{
    public function expectedCall()
    {
        $this->printLine("expected call");
    }

    public function unexpectedCall()
    {
        $this->printLine("UNexpected call");
    }

    private function printLine($text)
    {
        echo "\n{$text}\n";
    }
}
