<?php
namespace DevBoardLib\GithubCore\Milestone;

use DevBoardLib\GithubCore\Identifier;

class GithubMilestoneId implements Identifier
{
    private $githubMilestoneId;

    /**
     * IssueId constructor.
     *
     * @param $id
     */
    public function __construct($githubMilestoneId)
    {
        $this->githubMilestoneId = $githubMilestoneId;
    }

    public function __toString()
    {
        return (string) $this->githubMilestoneId;
    }
}
