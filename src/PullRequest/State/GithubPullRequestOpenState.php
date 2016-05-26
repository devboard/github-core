<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\PullRequest\State;

/**
 * Class GithubPullRequestOpenState.
 */
class GithubPullRequestOpenState implements GithubPullRequestState
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'open';
    }
}
