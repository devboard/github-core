<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

/**
 * Interface GithubRepoPermissionsInterface.
 */
interface GithubRepoPermissonsInterface
{
    /** @return bool */
    public function isAdmin();

    /** @return bool */
    public function isPushAllowed();

    /** @return bool */
    public function isReadAllowed();
}
