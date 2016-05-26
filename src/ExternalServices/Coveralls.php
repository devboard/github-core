<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

class Coveralls implements ExternalService
{
    public function __toString() : string
    {
        return self::COVERALLS;
    }
}
