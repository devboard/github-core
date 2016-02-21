<?php
namespace DevBoardLib\GithubCore\PullRequest;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Milestone\GithubMilestone;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestState;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Class GithubPullRequestSource.
 */
class GithubPullRequestSource implements GithubPullRequest
{
    /** @var GithubPullRequestId */
    protected $id;
    /** @var GithubRepo */
    protected $repo;
    /** @var int */
    private $number;
    /** @var GithubPullRequestState */
    private $state;
    /** @var bool */
    private $locked;
    /** @var bool */
    private $merged;
    /** @var string */
    private $title;
    /** @var string */
    private $body;
    /** @var GithubCommitId */
    private $lastCommitId;
    /** @var GithubUser */
    private $createdByUser;
    /** @var GithubUser */
    private $assignedToUser;
    /** @var GithubMilestone */
    private $milestone;
    /** @var \DateTime */
    private $githubCreatedAt;
    /** @var \DateTime */
    private $githubUpdatedAt;
    /** @var \DateTime */
    private $githubClosedAt;

    /**
     * GithubPullRequestSource constructor.
     *
     * @param GithubPullRequestId    $id
     * @param GithubRepo             $repo
     * @param int                    $number
     * @param GithubPullRequestState $state
     * @param                        $locked
     * @param                        $merged
     * @param string                 $title
     * @param string                 $body
     * @param GithubCommitId         $lastCommitId
     * @param GithubUser             $createdByUser
     * @param GithubUser             $assignedToUser
     * @param GithubMilestone        $milestone
     * @param DateTime               $githubCreatedAt
     * @param DateTime               $githubUpdatedAt
     * @param DateTime               $githubClosedAt
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        GithubPullRequestId $id,
        GithubRepo $repo,
        $number,
        GithubPullRequestState $state,
        $locked,
        $merged,
        $title,
        $body,
        GithubCommitId $lastCommitId,
        GithubUser $createdByUser,
        GithubUser $assignedToUser = null,
        GithubMilestone $milestone = null,
        DateTime $githubCreatedAt,
        DateTime $githubUpdatedAt,
        DateTime $githubClosedAt = null
    ) {
        $this->id = $id;
        $this->repo = $repo;
        $this->number = $number;
        $this->state = $state;
        $this->locked = $locked;
        $this->merged = $merged;
        $this->title = $title;
        $this->body = $body;
        $this->lastCommitId = $lastCommitId;
        $this->createdByUser = $createdByUser;
        $this->assignedToUser = $assignedToUser;
        $this->milestone = $milestone;
        $this->githubCreatedAt = $githubCreatedAt;
        $this->githubUpdatedAt = $githubUpdatedAt;
        $this->githubClosedAt = $githubClosedAt;
    }

    /** @return GithubPullRequestId */
    public function getId()
    {
        return $this->id;
    }

    /** @return GithubRepoId */
    public function getRepoId()
    {
        return $this->repo->getId();
    }

    /** @return GithubRepo */
    public function getRepo()
    {
        return $this->repo;
    }

    /** @return int */
    public function getNumber()
    {
        return $this->number;
    }

    /** @return GithubPullRequestState */
    public function getState()
    {
        return $this->state;
    }

    /** @return bool */
    public function isLocked()
    {
        return $this->locked;
    }

    /** @return bool */
    public function isMerged()
    {
        return $this->merged;
    }

    /** @return string */
    public function getTitle()
    {
        return $this->title;
    }

    /** @return string */
    public function getBody()
    {
        return $this->body;
    }

    /** @return GithubCommitId */
    public function getLastCommitId()
    {
        return $this->lastCommitId;
    }

    /** @return GithubUserId */
    public function getCreatedByUserId()
    {
        return $this->createdByUser->getGithubUserId();
    }

    /** @return GithubUser */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }

    /** @return GithubUserId */
    public function getAssignedToUserId()
    {
        if (null !== $this->assignedToUser) {
            return $this->assignedToUser->getGithubUserId();
        }

        return null;
    }

    /** @return GithubUser */
    public function getAssignedToUser()
    {
        return $this->assignedToUser;
    }

    /** @return GithubMilestoneId */
    public function getMilestoneId()
    {
        if (null !== $this->milestone) {
            return $this->milestone->getId();
        }

        return null;
    }

    /** @return GithubMilestone */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /** @return DateTime */
    public function getGithubCreatedAt()
    {
        return $this->githubCreatedAt;
    }

    /** @return DateTime */
    public function getGithubUpdatedAt()
    {
        return $this->githubUpdatedAt;
    }

    /** @return DateTime */
    public function getGithubClosedAt()
    {
        return $this->githubClosedAt;
    }
}
