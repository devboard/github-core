<?php

namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;

/**
 * @todo: Reason this class exists
 */
class GithubRepoFullName implements Identifier
{
    /**
     * @var string
     */
    private $fullName;

    /**
     * GithubRepoFullName constructor.
     *
     * @param $fullName
     */
    public function __construct(string $fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->fullName;
    }
}
