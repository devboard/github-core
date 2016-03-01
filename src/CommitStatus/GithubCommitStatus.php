<?php

namespace DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusState;
use DevBoardLib\GithubCore\External\ExternalServiceId;

/**
 */
interface GithubCommitStatus
{
    /** @return GithubCommitStatusId */
    public function getLastReceivedGithubStatusId();

    /** @return GithubCommitId */
    public function getGithubCommitId();

    /** @return ExternalServiceId */
    public function getGithubExternalServiceId();

    /** @return string */
    public function getDescription();

    /** @return string */
    public function getTargetUrl();

    /** @return GithubCommitStatusState */
    public function getGithubState();

    /** @return DateTime */
    public function getGithubCreatedAt();

    /** @return DateTime */
    public function getGithubUpdatedAt();
}
