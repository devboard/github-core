<?php
namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubRepoId.
 */
class GithubRepoId implements Identifier
{
    private $githubRepoId;

    /**
     * IssueId constructor.
     *
     * @param $githubRepoId
     */
    public function __construct($githubRepoId)
    {
        $this->githubRepoId = $githubRepoId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubRepoId;
    }
}
