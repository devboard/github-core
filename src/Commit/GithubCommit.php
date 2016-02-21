<?php
namespace DevBoardLib\GithubCore\Commit;

use DateTime;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 */
interface GithubCommit
{
    /** @return GithubCommitId */
    public function getId();

    /** @return GithubRepoId */
    public function getRepoId();

    /** @return GithubCommitSha */
    public function getSha();

    /** @return GithubUserId */
    public function getAuthorId();

    /** @return DateTime */
    public function getAuthorDate();

    /** @return GithubUserId */
    public function getCommitterId();

    /** @return DateTime */
    public function getCommitterDate();

    /** @return string */
    public function getMessage();

    /** @return string */
    public function getGithubCommitState();
}
