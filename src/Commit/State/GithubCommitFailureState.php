<?php

namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitFailureState.
 */
class GithubCommitFailureState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'failure';
    }
}
