<?php
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
