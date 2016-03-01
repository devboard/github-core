<?php

namespace DevBoardLib\GithubCore\PullRequest\State;

/**
 * Class GithubPullRequestClosedState.
 */
class GithubPullRequestClosedState implements GithubPullRequestState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'closed';
    }
}
