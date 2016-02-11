<?php
namespace DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\Identifier;

class GithubUserId implements Identifier
{
    private $githubUserId;

    /**
     * UserId constructor.
     *
     * @param $id
     */
    public function __construct($githubUserId)
    {
        $this->githubUserId = $githubUserId;
    }

    public function __toString()
    {
        return (string) $this->githubUserId;
    }
}
