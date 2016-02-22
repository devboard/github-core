<?php
namespace DevBoardLib\GithubCore\PullRequest;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubPullRequestId.
 */
class GithubPullRequestId implements Identifier
{
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
    public function __toString()
    {
        return (string) $this->githubPullRequestId;
    }
}
