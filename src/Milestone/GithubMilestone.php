<?php

namespace DevBoardLib\GithubCore\Milestone;

/**
 * Interface GithubMilestone.
 */
interface GithubMilestone
{
    /**
     * @return \DevBoardLib\GithubCore\Milestone\GithubMilestoneId
     */
    public function getId();

    /**
     * @return \DevBoardLib\GithubCore\Repo\GithubRepoId
     */
    public function getRepoId();

    /**
     * @return int
     */
    public function getNumber();

    /**
     * @return \DevBoardLib\GithubCore\Milestone\State\GithubMilestoneState
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
     * @return \DevBoardLib\GithubCore\User\GithubUserId
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
     * @return \DateTime
     */
    public function getDueDate();

    /**
     * @return \DateTime
     */
    public function getGithubCreatedAt();

    /**
     * @return \DateTime
     */
    public function getGithubUpdatedAt();

    /**
     * @return \DateTime
     */
    public function getGithubClosedAt();
}
