<?php

namespace DevBoardLib\GithubCore\External;

/**
 * Interface ExternalService.
 */
interface ExternalService
{
    /** @return \DevBoardLib\GithubCore\External\ExternalServiceId */
    public function getId();

    /** @return string */
    public function getName();
}
