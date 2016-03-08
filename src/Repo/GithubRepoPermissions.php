<?php

namespace DevBoardLib\GithubCore\Repo;

/**
 * Class GithubRepoPermissions.
 */
class GithubRepoPermissions implements GithubRepoPermissonsInterface
{
    /** @var bool */
    private $admin;
    /** @var bool */
    private $push;
    /** @var bool */
    private $read;

    /**
     * GithubRepoPermissions constructor.
     *
     * @param bool $admin
     * @param bool $push
     * @param bool $read
     */
    public function __construct($admin, $push, $read)
    {
        $this->admin = $admin;
        $this->push  = $push;
        $this->read  = $read;
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * @return bool
     */
    public function isPushAllowed()
    {
        return $this->push;
    }

    /**
     * @return bool
     */
    public function isReadAllowed()
    {
        return $this->read;
    }
}
