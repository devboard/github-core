<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\Issue;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubIssueId.
 */
class GithubIssueId implements Identifier
{
    /**
     * @var
     */
    private $githubIssueId;

    /**
     * IssueId constructor.
     *
     * @param $githubIssueId
     */
    public function __construct($githubIssueId)
    {
        $this->githubIssueId = $githubIssueId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubIssueId;
    }
}
