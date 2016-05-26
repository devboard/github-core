<?php

namespace DevBoardLib\GithubCore\CommitStatus;

use DevBoardLib\GithubCore\Identifier;

class GithubCommitStatusId implements Identifier
{
    /**
     * @var
     */
    private $githubCommitStatusId;

    /**
     * CommitStatusId constructor.
     *
     * @param string $githubCommitStatusId
     */
    public function __construct(string $githubCommitStatusId)
    {
        $this->githubCommitStatusId = $githubCommitStatusId;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return (string) $this->githubCommitStatusId;
    }
}
