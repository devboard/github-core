<?php

namespace DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Interface GithubBranch.
 */
interface GithubBranch
{
    /** @return GithubBranchId */
    public function getId();

    /** @return GithubRepoId */
    public function getRepoId();

    /** @return string */
    public function getName();

    /** @return GithubCommitId */
    public function getLastCommitId();
}
