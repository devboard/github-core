<?php

namespace DevBoardLib\GithubCore\CommitStatus;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubCommitStatusId.
 */
class GithubCommitStatusId implements Identifier
{
    /**
     * @var
     */
    private $githubCommitStatusId;

    /**
     * CommitStatusId constructor.
     *
     * @param $githubCommitStatusId
     */
    public function __construct($githubCommitStatusId)
    {
        $this->githubCommitStatusId = $githubCommitStatusId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubCommitStatusId;
    }
}
