<?php

namespace DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 */
interface GithubCommit
{
    /** @return GithubCommitSha */
    public function getSha() : GithubCommitSha;

    /** @return GithubRepoId */
    public function getGithubRepoId() : GithubRepoId;

    /** @return GithubCommitAuthor */
    public function getAuthor() : GithubCommitAuthor;

    /** @return GithubCommitCommitter */
    public function getCommitter() : GithubCommitCommitter;

    /** @return string */
    public function getMessage() : string;
}
