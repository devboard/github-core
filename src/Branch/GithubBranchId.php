<?php

namespace DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Identifier;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubBranchId.
 */
class GithubBranchId implements Identifier
{
    /** @var GithubRepoId */
    private $githubRepoId;
    /** @var string */
    private $branchName;

    /**
     * BranchId constructor.
     *
     * @param GithubRepoId $githubRepoId
     * @param              $branchName
     */
    public function __construct(GithubRepoId $githubRepoId, $branchName)
    {
        $this->githubRepoId = $githubRepoId;
        $this->branchName   = $branchName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->githubRepoId->__toString().'-'.$this->branchName;
    }
}
