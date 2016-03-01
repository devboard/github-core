<?php

namespace DevBoardLib\GithubCore\CommitStatus\State;

use Exception;

/**
 * Class GithubCommitStatusStateFactory.
 */
class GithubCommitStatusStateFactory
{
    /**
     * @param $githubCommitStatusStateTest
     *
     * @throws Exception
     *
     * @return GithubCommitStatusErrorState|GithubCommitStatusFailureState|GithubCommitStatusPendingState|GithubCommitStatusSuccessState
     */
    public static function create($githubCommitStatusStateTest)
    {
        if ($githubCommitStatusStateTest === 'pending') {
            return new GithubCommitStatusPendingState();
        } elseif ($githubCommitStatusStateTest === 'success') {
            return new GithubCommitStatusSuccessState();
        } elseif ($githubCommitStatusStateTest === 'failure') {
            return new GithubCommitStatusFailureState();
        } elseif ($githubCommitStatusStateTest === 'error') {
            return new GithubCommitStatusErrorState();
        }

        throw new Exception($githubCommitStatusStateTest.' is not recognized commit state');
    }
}
