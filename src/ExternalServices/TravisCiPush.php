<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;

class TravisCiPush implements ExternalService
{
    public function __toString() : string
    {
        return self::TRAVIS_CI_PUSH;
    }
}
