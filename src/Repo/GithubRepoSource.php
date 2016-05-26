<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Class GithubRepoSource.
 */
class GithubRepoSource implements GithubRepo, GithubRepoPermissonsInterface
{
    /** @var GithubRepoId */
    private $id;
    /** @var GithubRepoOwner */
    private $owner;
    /** @var GithubRepoName */
    private $name;
    /** @var GithubRepoFullName */
    private $fullName;
    /** @var string */
    private $htmlUrl;
    /** @var string */
    private $description;
    /** @var bool */
    private $fork;
    /** @var string */
    private $defaultBranchName;
    /** @var bool */
    private $private;
    /** @var GithubRepoGitUrl */
    private $gitUrl;
    /** @var GithubRepoSshUrl */
    private $sshUrl;
    /** @var GithubRepoPermissions */
    private $permissions;
    /** @var GithubRepoCreatedAt */
    private $githubCreatedAt;
    /** @var GithubRepoUpdatedAt */
    private $githubUpdatedAt;
    /** @var GithubRepoPushedAt */
    private $githubPushedAt;

    /**
     * GithubRepoSource constructor.
     *
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     *
     * @param GithubRepoId          $id
     * @param GithubRepoOwner       $owner
     * @param GithubRepoName        $name
     * @param GithubRepoFullName    $fullName
     * @param                       $htmlUrl
     * @param                       $description
     * @param bool                  $fork
     * @param                       $defaultBranchName
     * @param bool                  $private
     * @param GithubRepoGitUrl      $gitUrl
     * @param GithubRepoSshUrl      $sshUrl
     * @param GithubRepoPermissions $permissions
     * @param GithubRepoCreatedAt   $githubCreatedAt
     * @param GithubRepoUpdatedAt   $githubUpdatedAt
     * @param GithubRepoPushedAt    $githubPushedAt
     */
    public function __construct(
        GithubRepoId $id,
        GithubRepoOwner $owner,
        GithubRepoName $name,
        GithubRepoFullName $fullName,
        string $htmlUrl,
        string $description,
        bool $fork,
        string $defaultBranchName,
        bool $private,
        GithubRepoGitUrl $gitUrl,
        GithubRepoSshUrl $sshUrl,
        GithubRepoPermissions $permissions = null,
        GithubRepoCreatedAt $githubCreatedAt,
        GithubRepoUpdatedAt $githubUpdatedAt,
        GithubRepoPushedAt $githubPushedAt
    ) {
        $this->id                = $id;
        $this->owner             = $owner;
        $this->name              = $name;
        $this->fullName          = $fullName;
        $this->htmlUrl           = $htmlUrl;
        $this->description       = $description;
        $this->fork              = $fork;
        $this->defaultBranchName = $defaultBranchName;
        $this->private           = $private;
        $this->gitUrl            = $gitUrl;
        $this->sshUrl            = $sshUrl;
        $this->permissions       = $permissions;
        $this->githubCreatedAt   = $githubCreatedAt;
        $this->githubUpdatedAt   = $githubUpdatedAt;
        $this->githubPushedAt    = $githubPushedAt;
    }

    /**
     * @return GithubRepoId
     */
    public function getId() : GithubRepoId
    {
        return $this->id;
    }

    /**
     * @return GithubUserId
     */
    public function getOwnerUserId() : GithubUserId
    {
        return $this->owner->getGithubUserId();
    }

    /**
     * @return GithubRepoOwner
     */
    public function getOwner() : GithubRepoOwner
    {
        return $this->owner;
    }

    /**
     * @return GithubRepoName
     */
    public function getName() : GithubRepoName
    {
        return $this->name;
    }

    /**
     * @return GithubRepoFullName
     */
    public function getFullName() : GithubRepoFullName
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isFork() : bool
    {
        return $this->fork;
    }

    /**
     * @return string
     */
    public function getDefaultBranchName() : string
    {
        return $this->defaultBranchName;
    }

    /**
     * @return bool
     */
    public function isPrivate() : bool
    {
        return $this->private;
    }

    /**
     * @return GithubRepoGitUrl
     */
    public function getGitUrl() : GithubRepoGitUrl
    {
        return $this->gitUrl;
    }

    /**
     * @return GithubRepoSshUrl
     */
    public function getSshUrl() : GithubRepoSshUrl
    {
        return $this->sshUrl;
    }

    /**
     * @return bool
     */
    public function isAdmin() : bool
    {
        return $this->permissions->isAdmin();
    }

    /**
     * @return bool
     */
    public function isPushAllowed() : bool
    {
        return $this->permissions->isPushAllowed();
    }

    /**
     * @return bool
     */
    public function isReadAllowed() : bool
    {
        return $this->permissions->isReadAllowed();
    }

    /**
     * @return GithubRepoCreatedAt
     */
    public function getGithubCreatedAt() : GithubRepoCreatedAt
    {
        return $this->githubCreatedAt;
    }

    /**
     * @return GithubRepoUpdatedAt
     */
    public function getGithubUpdatedAt() : GithubRepoUpdatedAt
    {
        return $this->githubUpdatedAt;
    }

    /**
     * @return GithubRepoPushedAt
     */
    public function getGithubPushedAt() : GithubRepoPushedAt
    {
        return $this->githubPushedAt;
    }
}
