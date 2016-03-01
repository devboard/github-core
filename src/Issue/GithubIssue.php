<?php

namespace DevBoardLib\GithubCore\Issue;

/**
 * Interface GithubIssue.
 */
interface GithubIssue
{
    /**
     * @return \DevBoardLib\GithubCore\Issue\GithubIssueId
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
     * @return \DevBoardLib\GithubCore\Issue\State\GithubIssueState
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
     * @return \DevBoardLib\GithubCore\User\GithubUserId
     */
    public function getCreatedByUserId();

    /**
     * @return \DevBoardLib\GithubCore\User\GithubUserId
     */
    public function getAssignedToUserId();

    /**
     * @return \DevBoardLib\GithubCore\Milestone\GithubMilestoneId
     */
    public function getMilestoneId();

    /**
     * @return int
     */
    public function getCommentCount();

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
