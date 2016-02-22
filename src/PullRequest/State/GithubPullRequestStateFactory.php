<?php
namespace DevBoardLib\GithubCore\PullRequest\State;

use Exception;

/**
 * Class GithubPullRequestStateFactory.
 */
class GithubPullRequestStateFactory
{
    /**
     * @param $githubPullRequestStateTest
     *
     * @throws Exception
     *
     * @return GithubPullRequestClosedState|GithubPullRequestOpenState
     */
    public static function create($githubPullRequestStateTest)
    {
        if ($githubPullRequestStateTest === 'open') {
            return new GithubPullRequestOpenState();
        } elseif ($githubPullRequestStateTest === 'closed') {
            return new GithubPullRequestClosedState();
        }

        throw new Exception($githubPullRequestStateTest.' is not recognized pull request state');
    }
}
