<?php
namespace DevBoardLib\GithubCore\Issue;

use DevBoardLib\GithubCore\Identifier;

class GithubIssueId implements Identifier
{
    private $githubIssueId;

    /**
     * IssueId constructor.
     *
     * @param $id
     */
    public function __construct($githubIssueId)
    {
        $this->githubIssueId = $githubIssueId;
    }

    public function __toString()
    {
        return (string) $this->githubIssueId;
    }
}
