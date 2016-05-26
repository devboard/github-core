<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;

/**
 * @todo: Reason this class exists
 */
class GithubRepoName implements Identifier
{
    /**
     * @var string
     */
    private $name;

    /**
     * GithubRepoName constructor.
     *
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->name;
    }
}
