<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Commit\State;

/**
 * Class GithubCommitSuccessState.
 */
class GithubCommitSuccessState implements GithubCommitState
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'success';
    }
}
