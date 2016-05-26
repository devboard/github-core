<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

/**
 * Interface GithubRepoApiInterface.
 */
interface GithubRepoApiInterface
{
    /** @return string */
    public function getOwner();

    /** @return string */
    public function getName();

    /** @return string */
    public function getFullName();
}
