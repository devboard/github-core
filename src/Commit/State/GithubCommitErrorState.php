<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitErrorState.
 */
class GithubCommitErrorState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'error';
    }
}
