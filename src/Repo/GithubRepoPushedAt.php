<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

use DateTime;

/**
 * @todo: Reason this class exists
 */
class GithubRepoPushedAt extends DateTime
{
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format('Y-m-d H:i:s');
    }
}
