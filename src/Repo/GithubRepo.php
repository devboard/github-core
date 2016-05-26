<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

/**
 * Interface GithubRepo.
 */
interface GithubRepo extends GithubRepoApiInterface
{
    /** @return \DevBoardLib\GithubCore\Repo\GithubRepoId */
    public function getId();

    /** @return \DevBoardLib\GithubCore\User\GithubUserId */
    public function getOwnerUserId();

    /** @return bool */
    public function isFork();

    /** @return string */
    public function getDefaultBranchName();

    /** @return bool */
    public function isPrivate();

    /** @return \DateTime */
    public function getGithubCreatedAt();

    /** @return \DateTime */
    public function getGithubUpdatedAt();

    /** @return \DateTime */
    public function getGithubPushedAt();
}
