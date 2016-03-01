<?php

namespace DevBoardLib\GithubCore\Milestone\State;

/**
 * Class GithubMilestoneOpenState.
 */
class GithubMilestoneOpenState implements GithubMilestoneState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'open';
    }
}
