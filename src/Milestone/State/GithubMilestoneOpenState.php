<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Milestone\State;

/**
 * Class GithubMilestoneOpenState.
 */
class GithubMilestoneOpenState implements GithubMilestoneState
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'open';
    }
}
