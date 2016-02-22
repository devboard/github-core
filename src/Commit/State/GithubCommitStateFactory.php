<?php
namespace DevBoardLib\GithubCore\Commit\State;

use Exception;

/**
 * Class GithubCommitStateFactory.
 */
class GithubCommitStateFactory
{
    /**
     * @param $githubCommitStateTest
     *
     * @throws Exception
     *
     * @return GithubCommitErrorState|GithubCommitFailureState|GithubCommitPendingState|GithubCommitSuccessState
     */
    public static function create($githubCommitStateTest)
    {
        if ($githubCommitStateTest === 'pending') {
            return new GithubCommitPendingState();
        } elseif ($githubCommitStateTest === 'success') {
            return new GithubCommitSuccessState();
        } elseif ($githubCommitStateTest === 'failure') {
            return new GithubCommitFailureState();
        } elseif ($githubCommitStateTest === 'error') {
            return new GithubCommitErrorState();
        }

        throw new Exception($githubCommitStateTest.' is not recognized commit state');
    }
}
