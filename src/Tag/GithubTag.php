<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Interface GithubTag.
 */
interface GithubTag
{
    /** @return string */
    public function getName() : string;

    /** @return GithubRepoId */
    public function getGithubRepoId() : GithubRepoId;

    /** @return GithubCommit */
    public function getLastCommit() : GithubCommit;
}
