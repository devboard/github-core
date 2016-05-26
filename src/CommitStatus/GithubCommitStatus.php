<?php

namespace DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\State;
use DevBoardLib\GithubCore\ExternalServices\ExternalService;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

interface GithubCommitStatus
{
    /**
     * @return GithubCommitStatusId
     */
    public function getId() : GithubCommitStatusId;

    /**
     * @return GithubRepoId
     */
    public function getGithubRepoId() : GithubRepoId;

    /**
     * @return GithubCommitId
     */
    public function getCommitId() : GithubCommitId;

    /**
     * @return ExternalService
     */
    public function getExternalService() : ExternalService;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @return string
     */
    public function getTargetUrl() : string;

    /**
     * @return State
     */
    public function getState() : State;

    /**
     * @return DateTime
     */
    public function getCreatedAt() : DateTime;

    /**
     * @return DateTime
     */
    public function getUpdatedAt() : DateTime;
}
