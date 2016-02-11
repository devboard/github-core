<?php
namespace DevBoardLib\GithubCore\Issue;

use DateTime;
use DevBoardLib\GithubCore\Issue\GithubIssueId;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUserId;

interface GithubIssue
{
    /**
     * @return GithubIssueId
     */
    public function getId();

    /**
     * @return GithubRepoId
     */
    public function getRepoId();

    /**
     * @return int
     */
    public function getNumber();

    /**
     * @return string
     */
    public function getState();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getBody();

    /**
     * @return GithubUserId
     */
    public function getCreatedByUserId();

    /**
     * @return GithubUserId
     */
    public function getAssignedToUserId();

    /**
     * @return GithubMilestoneId
     */
    public function getMilestoneId();

    /**
     * @return int
     */
    public function getCommentCount();

    /**
     * @return DateTime
     */
    public function getGithubCreatedAt();

    /**
     * @return DateTime
     */
    public function getGithubUpdatedAt();
}
