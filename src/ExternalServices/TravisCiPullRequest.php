<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;

class TravisCiPullRequest implements ExternalService
{
    public function __toString() : string
    {
        return self::TRAVIS_CI_PULL_REQUEST;
    }
}
