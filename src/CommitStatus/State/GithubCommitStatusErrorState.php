<?php

namespace DevBoardLib\GithubCore\CommitStatus\State;

/**
 * Class GithubCommitStatusErrorState.
 */
class GithubCommitStatusErrorState implements GithubCommitStatusState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'error';
    }
}
