<?php

namespace DevBoardLib\GithubCore\Repo;

use DateTime;

/**
 * @todo: Reason this class exists
 */
class GithubRepoUpdatedAt extends DateTime
{
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format('Y-m-d H:i:s');
    }
}
