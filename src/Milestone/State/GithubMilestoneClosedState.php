<?php
namespace DevBoardLib\GithubCore\Milestone\State;

/**
 * Class GithubMilestoneClosedState.
 */
class GithubMilestoneClosedState implements GithubMilestoneState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'closed';
    }
}
