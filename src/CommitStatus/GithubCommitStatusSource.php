<?php
namespace DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusState;
use DevBoardLib\GithubCore\External\ExternalService;
use DevBoardLib\GithubCore\External\ExternalServiceId;

/**
 * Class GithubCommitStatusSource.
 */
class GithubCommitStatusSource implements GithubCommitStatus
{
    /** @var GithubCommitStatusId */
    private $id;
    /** @var GithubCommit */
    private $githubCommit;
    /** @var ExternalService */
    private $githubExternalService;
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
     * @param GithubCommitStatusId    $id
     * @param GithubCommit            $githubCommit
     * @param ExternalService         $githubExternalService
     * @param string                  $description
     * @param string                  $targetUrl
     * @param GithubCommitStatusState $githubState
     * @param DateTime                $githubCreatedAt
     * @param DateTime                $githubUpdatedAt
     */
    public function __construct(
        GithubCommitStatusId $id,
        GithubCommit $githubCommit,
        ExternalService $githubExternalService,
        $description,
        $targetUrl,
        GithubCommitStatusState $githubState,
        DateTime $githubCreatedAt,
        DateTime $githubUpdatedAt
    ) {
        $this->id                    = $id;
        $this->githubCommit          = $githubCommit;
        $this->githubExternalService = $githubExternalService;
        $this->description           = $description;
        $this->targetUrl             = $targetUrl;
        $this->githubState           = $githubState;
        $this->githubCreatedAt       = $githubCreatedAt;
        $this->githubUpdatedAt       = $githubUpdatedAt;
    }

    /** @return GithubCommitStatusId */
    public function getId()
    {
        return $this->id;
    }

    /** @return GithubCommitId */
    public function getGithubCommitId()
    {
        return $this->githubCommit->getId();
    }

    /** @return GithubCommit */
    public function getGithubCommit()
    {
        return $this->githubCommit;
    }

    /** @return ExternalServiceId */
    public function getGithubExternalServiceId()
    {
        return $this->githubExternalService->getId();
    }

    /** @return ExternalService */
    public function getGithubExternalService()
    {
        return $this->githubExternalService;
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
