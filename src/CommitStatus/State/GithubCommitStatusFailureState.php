<?php
namespace DevBoardLib\GithubCore\CommitStatus\State;

/**
 * Class GithubCommitStatusFailureState.
 */
class GithubCommitStatusFailureState implements GithubCommitStatusState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'failure';
    }
}
