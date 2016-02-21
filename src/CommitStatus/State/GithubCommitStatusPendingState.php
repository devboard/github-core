<?php
namespace DevBoardLib\GithubCore\CommitStatus\State;

/**
 * Class GithubCommitStatusPendingState.
 */
class GithubCommitStatusPendingState implements GithubCommitStatusState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'pending';
    }
}
