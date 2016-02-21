<?php
namespace DevBoardLib\GithubCore\CommitStatus\State;

/**
 * Class GithubCommitStatusSuccessState.
 */
class GithubCommitStatusSuccessState implements GithubCommitStatusState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'success';
    }
}
