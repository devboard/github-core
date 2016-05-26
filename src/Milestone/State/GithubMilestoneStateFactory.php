<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Milestone\State;

use Exception;

/**
 * Class GithubMilestoneStateFactory.
 */
class GithubMilestoneStateFactory
{
    /**
     * @param $githubMilestoneStateTest
     *
     * @throws Exception
     *
     * @return GithubMilestoneClosedState|GithubMilestoneOpenState
     */
    public static function create($githubMilestoneStateTest)
    {
        if ($githubMilestoneStateTest === 'open') {
            return new GithubMilestoneOpenState();
        } elseif ($githubMilestoneStateTest === 'closed') {
            return new GithubMilestoneClosedState();
        }

        throw new Exception($githubMilestoneStateTest.' is not recognized issue state');
    }
}
