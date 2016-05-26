<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;

class SemaphoreCi implements ExternalService
{
    public function __toString() : string
    {
        return self::SEMAPHORE_CI;
    }
}
