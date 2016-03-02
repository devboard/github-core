<?php

namespace DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusState;
use DevBoardLib\GithubCore\External\ExternalServiceId;

/**
 * Class GithubCommitStatusSource.
 */
class GithubCommitStatusSource implements GithubCommitStatus
{
    /** @var GithubCommitStatusId */
    private $lastReceivedGithubStatusId;
    /** @var GithubCommitId */
    private $githubCommitId;
    /** @var ExternalServiceId */
    private $githubExternalServiceId;
    /** @var string */
    private $description;
    /** @var string */
    private $targetUrl;
    /** @var GithubCommitStatusState */
    private $githubState;
    /** @var DateTime */
    private $githubCreatedAt;
    /** @var DateTime */
    private $githubUpdatedAt;

    /**
     * GithubCommitStatusSource constructor.
     *
     * @param GithubCommitStatusId    $lastReceivedGithubStatusId
     * @param GithubCommitId          $githubCommitId
     * @param ExternalServiceId       $githubExternalServiceId
     * @param string                  $description
     * @param string                  $targetUrl
     * @param GithubCommitStatusState $githubState
     * @param DateTime                $githubCreatedAt
     * @param DateTime                $githubUpdatedAt
     */
    public function __construct(
        GithubCommitStatusId $lastReceivedGithubStatusId,
        GithubCommitId $githubCommitId,
        ExternalServiceId $githubExternalServiceId,
        $description,
        $targetUrl,
        GithubCommitStatusState $githubState,
        DateTime $githubCreatedAt,
        DateTime $githubUpdatedAt
    ) {
        $this->lastReceivedGithubStatusId = $lastReceivedGithubStatusId;
        $this->githubCommitId             = $githubCommitId;
        $this->githubExternalServiceId    = $githubExternalServiceId;
        $this->description                = $description;
        $this->targetUrl                  = $targetUrl;
        $this->githubState                = $githubState;
        $this->githubCreatedAt            = $githubCreatedAt;
        $this->githubUpdatedAt            = $githubUpdatedAt;
    }

    /**
     * @return GithubCommitStatusId
     */
    public function getLastReceivedGithubStatusId()
    {
        return $this->lastReceivedGithubStatusId;
    }

    /** @return GithubCommitId */
    public function getGithubCommitId()
    {
        return $this->githubCommitId;
    }

    /** @return ExternalServiceId */
    public function getGithubExternalServiceId()
    {
        return $this->githubExternalServiceId;
    }

    /** @return string */
    public function getDescription()
    {
        return $this->description;
    }

    /** @return string */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /** @return GithubCommitStatusState */
    public function getGithubState()
    {
        return $this->githubState;
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
}
