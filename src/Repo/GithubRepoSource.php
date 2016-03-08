<?php

namespace DevBoardLib\GithubCore\Repo;

use DateTime;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Class GithubRepoSource.
 */
class GithubRepoSource implements GithubRepo
{
    /** @var GithubRepoId */
    private $id;
    /** @var GithubUser */
    private $ownerUser;
    /** @var string */
    private $owner;
    /** @var string */
    private $name;
    /** @var string */
    private $fullName;
    /** @var string */
    private $htmlUrl;
    /** @var string */
    private $description;
    /** @var int */
    private $fork;
    /** @var string */
    private $defaultBranch;
    /** @var int */
    private $private;
    /** @var string */
    private $gitUrl;
    /** @var string */
    private $sshUrl;
    /** @var DateTime */
    private $githubCreatedAt;
    /** @var DateTime */
    private $githubUpdatedAt;
    /** @var DateTime */
    private $githubPushedAt;

    /**
     * GithubRepoSource constructor.
     *
     * @param GithubRepoId $id
     * @param GithubUser   $ownerUser
     * @param string       $owner
     * @param string       $name
     * @param string       $fullName
     * @param string       $htmlUrl
     * @param string       $description
     * @param bool         $fork
     * @param string       $defaultBranch
     * @param bool         $private
     * @param string       $gitUrl
     * @param string       $sshUrl
     * @param DateTime     $githubCreatedAt
     * @param DateTime     $githubUpdatedAt
     * @param DateTime     $githubPushedAt
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        GithubRepoId $id,
        GithubUser $ownerUser,
        $owner,
        $name,
        $fullName,
        $htmlUrl,
        $description,
        $fork,
        $defaultBranch,
        $private,
        $gitUrl,
        $sshUrl,
        DateTime $githubCreatedAt,
        DateTime $githubUpdatedAt,
        DateTime $githubPushedAt
    ) {
        $this->id              = $id;
        $this->ownerUser       = $ownerUser;
        $this->owner           = $owner;
        $this->name            = $name;
        $this->fullName        = $fullName;
        $this->htmlUrl         = $htmlUrl;
        $this->description     = $description;
        $this->fork            = $fork;
        $this->defaultBranch   = $defaultBranch;
        $this->private         = $private;
        $this->gitUrl          = $gitUrl;
        $this->sshUrl          = $sshUrl;
        $this->githubCreatedAt = $githubCreatedAt;
        $this->githubUpdatedAt = $githubUpdatedAt;
        $this->githubPushedAt  = $githubPushedAt;
    }

    /**
     * @return GithubRepoId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return GithubUserId
     */
    public function getOwnerUserId()
    {
        return $this->ownerUser->getGithubUserId();
    }

    /**
     * @return GithubUser
     */
    public function getOwnerUser()
    {
        return $this->ownerUser;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function isFork()
    {
        return $this->fork;
    }

    /**
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->defaultBranch;
    }

    /**
     * @return int
     */
    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * @return string
     */
    public function getGitUrl()
    {
        return $this->gitUrl;
    }

    /**
     * @return string
     */
    public function getSshUrl()
    {
        return $this->sshUrl;
    }

    /**
     * @return DateTime
     */
    public function getGithubCreatedAt()
    {
        return $this->githubCreatedAt;
    }

    /**
     * @return DateTime
     */
    public function getGithubUpdatedAt()
    {
        return $this->githubUpdatedAt;
    }

    /**
     * @return DateTime
     */
    public function getGithubPushedAt()
    {
        return $this->githubPushedAt;
    }
}
