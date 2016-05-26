<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Interface GithubBranch.
 */
interface GithubBranch
{
    /** @return GithubRepoId */
    public function getGithubRepoId() : GithubRepoId;

    /** @return string */
    public function getName() : string;

    /** @return GithubCommit */
    public function getLastCommit() : GithubCommit;
}
