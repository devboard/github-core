<?php

namespace DevBoardLib\GithubCore\Issue\State;

use Exception;

/**
 * Class GithubIssueStateFactory.
 */
class GithubIssueStateFactory
{
    /**
     * @param $githubIssueStateTest
     *
     * @throws Exception
     *
     * @return GithubIssueClosedState|GithubIssueOpenState
     */
    public static function create($githubIssueStateTest)
    {
        if ($githubIssueStateTest === 'open') {
            return new GithubIssueOpenState();
        } elseif ($githubIssueStateTest === 'closed') {
            return new GithubIssueClosedState();
        }

        throw new Exception($githubIssueStateTest.' is not recognized issue state');
    }
}
