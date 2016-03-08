<?php

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
