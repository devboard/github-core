<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitPendingState.
 */
class GithubCommitPendingState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'pending';
    }
}
