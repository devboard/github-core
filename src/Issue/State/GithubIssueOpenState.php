<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Issue\State;

/**
 * Class GithubIssueOpenState.
 */
class GithubIssueOpenState implements GithubIssueState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'open';
    }
}
