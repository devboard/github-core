<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;

class ScrutinizerCi implements ExternalService
{
    public function __toString() : string
    {
        return self::SCRUTINIZER_CI;
    }
}
