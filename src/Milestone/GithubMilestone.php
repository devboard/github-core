<?php
namespace DevBoardLib\GithubCore\Milestone;

use DateTime;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUserId;

interface GithubMilestone
{
    /**
     * @return GithubMilestoneId
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
    public function getDescription();

    /**
     * @return GithubUserId
     */
    public function getCreatedByUserId();

    /**
     * @return int
     */
    public function getOpenIssueCount();

    /**
     * @return int
     */
    public function getClosedIssueCount();

    /**
     * @return DateTime
     */
    public function getDueDate();

    /**
     * @return DateTime
     */
    public function getGithubCreatedAt();

    /**
     * @return DateTime
     */
    public function getGithubUpdatedAt();
}
