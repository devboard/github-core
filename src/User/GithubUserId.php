<?php

namespace DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubUserId.
 */
class GithubUserId implements Identifier
{
    private $githubUserId;

    /**
     * UserId constructor.
     *
     * @param $githubUserId
     */
    public function __construct($githubUserId)
    {
        $this->githubUserId = $githubUserId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubUserId;
    }
}
