<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\State;
use DevBoardLib\GithubCore\ExternalServices\ExternalService;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

class GithubCommitStatusSource implements GithubCommitStatus
{
    /** @var GithubCommitStatusId */
    private $id;
    /** @var GithubRepoId */
    private $githubRepoId;
    /** @var GithubCommitId */
    private $commitId;
    /** @var ExternalService */
    private $externalService;
    /** @var string */
    private $description;
    /** @var string */
    private $targetUrl;
    /** @var State */
    private $state;
    /** @var DateTime */
    private $createdAt;
    /** @var DateTime */
    private $updatedAt;

    public function __construct(
        GithubCommitStatusId $id,
        GithubRepoId $githubRepoId,
        GithubCommitId $commitId,
        ExternalService $externalService,
        string $description,
        string $targetUrl,
        State $state,
        DateTime $createdAt,
        DateTime $updatedAt
    ) {
        $this->id              = $id;
        $this->githubRepoId    = $githubRepoId;
        $this->commitId        = $commitId;
        $this->externalService = $externalService;
        $this->description     = $description;
        $this->targetUrl       = $targetUrl;
        $this->state           = $state;
        $this->createdAt       = $createdAt;
        $this->updatedAt       = $updatedAt;
    }

    /**
     * @return GithubCommitStatusId
     */
    public function getId() : GithubCommitStatusId
    {
        return $this->id;
    }

    /**
     * @return GithubRepoId
     */
    public function getGithubRepoId() : GithubRepoId
    {
        return $this->githubRepoId;
    }

    /**
     * @return GithubCommitId
     */
    public function getCommitId() : GithubCommitId
    {
        return $this->commitId;
    }

    /**
     * @return ExternalService
     */
    public function getExternalService() : ExternalService
    {
        return $this->externalService;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getTargetUrl() : string
    {
        return $this->targetUrl;
    }

    /**
     * @return State
     */
    public function getState() : State
    {
        return $this->state;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt() : DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt() : DateTime
    {
        return $this->updatedAt;
    }
}
