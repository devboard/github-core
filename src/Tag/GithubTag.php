<?php

namespace DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Interface GithubTag.
 */
interface GithubTag
{
    /** @return GithubTagId */
    public function getId();

    /** @return GithubRepoId */
    public function getRepoId();

    /** @return string */
    public function getName();

    /** @return GithubCommitId */
    public function getLastCommitId();
}
