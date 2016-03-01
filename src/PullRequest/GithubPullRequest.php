<?php

namespace DevBoardLib\GithubCore\PullRequest;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestState;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 */
interface GithubPullRequest
{
    /** @return GithubPullRequestId */
    public function getId();

    /** @return GithubRepoId */
    public function getRepoId();

    /** @return int */
    public function getNumber();

    /** @return GithubPullRequestState */
    public function getState();

    /** @return bool */
    public function isLocked();

    /** @return bool */
    public function isMerged();

    /** @return string */
    public function getTitle();

    /** @return string */
    public function getBody();

    /** @return GithubCommitId */
    public function getLastCommitId();

    /** @return GithubUserId */
    public function getCreatedByUserId();

    /** @return GithubUserId */
    public function getAssignedToUserId();

    /** @return GithubMilestoneId */
    public function getMilestoneId();

    /** @return DateTime */
    public function getGithubCreatedAt();

    /** @return DateTime */
    public function getGithubUpdatedAt();

    /** @return DateTime */
    public function getGithubClosedAt();
}
