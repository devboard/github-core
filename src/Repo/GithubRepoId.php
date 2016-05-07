<?php

namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubRepoId.
 */
class GithubRepoId implements Identifier
{
    /**
     * @var int
     */
    private $githubRepoId;

    /**
     * IssueId constructor.
     *
     * @param $githubRepoId
     */
    public function __construct(int $githubRepoId)
    {
        $this->githubRepoId = $githubRepoId;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return (string) $this->githubRepoId;
    }
}
