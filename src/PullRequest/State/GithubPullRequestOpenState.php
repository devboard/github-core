<?php

namespace DevBoardLib\GithubCore\PullRequest\State;

/**
 * Class GithubPullRequestOpenState.
 */
class GithubPullRequestOpenState implements GithubPullRequestState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'open';
    }
}
