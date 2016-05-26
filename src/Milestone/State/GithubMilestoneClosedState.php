<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Milestone\State;

/**
 * Class GithubMilestoneClosedState.
 */
class GithubMilestoneClosedState implements GithubMilestoneState
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'closed';
    }
}
