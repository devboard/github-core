<?php

namespace DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubCommitSha.
 */
class GithubCommitSha implements Identifier
{
    /** @var string */
    private $commitSha;

    /**
     * BranchId constructor.
     *
     * @param $commitSha
     */
    public function __construct(string $commitSha)
    {
        $this->commitSha = $commitSha;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->commitSha;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return (string) $this->commitSha;
    }
}
