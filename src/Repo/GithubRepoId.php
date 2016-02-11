<?php
namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;

class GithubRepoId implements Identifier
{
    private $githubRepoId;

    /**
     * IssueId constructor.
     *
     * @param $id
     */
    public function __construct($githubRepoId)
    {
        $this->githubRepoId = $githubRepoId;
    }

    public function __toString()
    {
        return (string) $this->githubRepoId;
    }
}
