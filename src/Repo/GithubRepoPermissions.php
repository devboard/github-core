<?php

declare (strict_types = 1);
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
    public function __construct(bool $admin, bool $push, bool $read)
    {
        $this->admin = $admin;
        $this->push  = $push;
        $this->read  = $read;
    }

    /**
     * @return bool
     */
    public function isAdmin() : bool
    {
        return $this->admin;
    }

    /**
     * @return bool
     */
    public function isPushAllowed() : bool
    {
        return $this->push;
    }

    /**
     * @return bool
     */
    public function isReadAllowed() : bool
    {
        return $this->read;
    }
}
