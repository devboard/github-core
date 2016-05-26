<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\PullRequest;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubPullRequestId.
 */
class GithubPullRequestId implements Identifier
{
    /**
     * @var
     */
    private $githubPullRequestId;

    /**
     * PullRequestId constructor.
     *
     * @param $githubPullRequestId
     */
    public function __construct($githubPullRequestId)
    {
        $this->githubPullRequestId = $githubPullRequestId;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return (string) $this->githubPullRequestId;
    }
}
