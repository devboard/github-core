<?php

namespace DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubUserId.
 */
class GithubUserId implements Identifier
{
    /**
     * @var
     */
    private $githubUserId;

    /**
     * UserId constructor.
     *
     * @param $githubUserId
     */
    public function __construct(int $githubUserId)
    {
        $this->githubUserId = $githubUserId;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->githubUserId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubUserId;
    }
}
