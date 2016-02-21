<?php
namespace DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubBranchSource.
 */
class GithubBranchSource implements GithubBranch
{
    /** @var GithubBranchId */
    private $id;

    /** @var GithubRepo */
    private $repo;

    /** @var string */
    private $name;

    /** @var GithubCommit */
    private $lastCommit;

    /**
     * GithubBranchSource constructor.
     *
     * @param GithubBranchId $id
     * @param GithubRepo     $repo
     * @param string         $name
     * @param GithubCommit   $lastCommit
     *
     * @internal param GithubCommitId $lastCommitId
     */
    public function __construct(GithubBranchId $id, GithubRepo $repo, $name, GithubCommit $lastCommit)
    {
        $this->id         = $id;
        $this->repo       = $repo;
        $this->name       = $name;
        $this->lastCommit = $lastCommit;
    }

    /** @return GithubBranchId */
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

    /** @return GithubCommit */
    public function getLastCommit()
    {
        return $this->lastCommit;
    }
}
