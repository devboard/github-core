<?php

namespace DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubTagSource.
 */
class GithubTagSource implements GithubTag
{
    /** @var GithubRepoId */
    private $githubRepoId;

    /** @var string */
    private $name;

    /** @var GithubCommit */
    private $lastCommit;

    /**
     * GithubBranchSource constructor.
     *
     * @param GithubRepoId $githubRepoId
     * @param string       $name
     * @param GithubCommit $lastCommit
     */
    public function __construct(GithubRepoId $githubRepoId, string $name, GithubCommit $lastCommit)
    {
        $this->githubRepoId = $githubRepoId;
        $this->name         = $name;
        $this->lastCommit   = $lastCommit;
    }

    /**
     * @return GithubRepoId
     */
    public function getGithubRepoId() : GithubRepoId
    {
        return $this->githubRepoId;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return GithubCommit
     */
    public function getLastCommit() : GithubCommit
    {
        return $this->lastCommit;
    }
}
