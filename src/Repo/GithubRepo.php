<?php

namespace DevBoardLib\GithubCore\Repo;

/**
 * Interface GithubRepo.
 */
interface GithubRepo
{
    /** @return \DevBoardLib\GithubCore\Repo\GithubRepoId */
    public function getId();

    /** @return \DevBoardLib\GithubCore\User\GithubUserId */
    public function getOwnerUserId();

    /** @return string */
    public function getOwner();

    /** @return string */
    public function getName();

    /** @return string */
    public function getFullName();

    /** @return string */
    public function getHtmlUrl();

    /** @return string */
    public function getDescription();

    /** @return int */
    public function getFork();

    /** @return string */
    public function getDefaultBranch();

    /** @return int */
    public function getGithubPrivate();

    /** @return string */
    public function getGitUrl();

    /** @return string */
    public function getSshUrl();

    /** @return \DateTime */
    public function getGithubCreatedAt();

    /** @return \DateTime */
    public function getGithubUpdatedAt();

    /** @return \DateTime */
    public function getGithubPushedAt();
}
