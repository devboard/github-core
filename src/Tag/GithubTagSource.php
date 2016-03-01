<?php

namespace DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubTagSource.
 */
class GithubTagSource implements GithubTag
{
    /** @var GithubTagId */
    private $id;

    /** @var GithubRepo */
    private $repo;

    /** @var string */
    private $name;

    /** @var GithubCommit */
    private $lastCommit;

    /**
     * GithubTagSource constructor.
     *
     * @param GithubTagId  $id
     * @param GithubRepo   $repo
     * @param string       $name
     * @param GithubCommit $lastCommit
     */
    public function __construct(GithubTagId $id, GithubRepo $repo, $name, GithubCommit $lastCommit)
    {
        $this->id         = $id;
        $this->repo       = $repo;
        $this->name       = $name;
        $this->lastCommit = $lastCommit;
    }

    /** @return GithubTagId */
    public function getId()
    {
        return $this->id;
    }

    /** @return GithubRepoId */
    public function getRepoId()
    {
        return $this->repo->getId();
    }

    /** @return GithubRepo */
    public function getRepo()
    {
        return $this->repo;
    }

    /** @return string */
    public function getName()
    {
        return $this->name;
    }

    /** @return GithubCommitId */
    public function getLastCommitId()
    {
        return $this->lastCommit->getId();
    }

    /** @return GithubCommitId */
    public function getLastCommit()
    {
        return $this->lastCommit;
    }
}
