<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

/**
 * Value object to handle all cases when we dont have dedicated objects handling a service.
 */
class UnsupportedService implements ExternalService
{
    /** @var string */
    private $context;

    public function __construct(string $context)
    {
        $this->context = $context;
    }

    public function __toString() : string
    {
        return $this->context;
    }
}
