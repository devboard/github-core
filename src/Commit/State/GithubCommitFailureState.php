<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitFailureState.
 */
class GithubCommitFailureState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'failure';
    }
}
