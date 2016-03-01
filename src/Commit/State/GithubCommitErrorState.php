<?php

namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitErrorState.
 */
class GithubCommitErrorState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'error';
    }
}
