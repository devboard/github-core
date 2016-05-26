<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Issue\State;

/**
 * Class GithubIssueClosedState.
 */
class GithubIssueClosedState implements GithubIssueState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'closed';
    }
}
