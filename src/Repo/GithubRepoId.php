<?php

declare (strict_types = 1);
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
     * @return int
     */
    public function getId() : int
    {
        return $this->githubRepoId;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return (string) $this->githubRepoId;
    }
}
