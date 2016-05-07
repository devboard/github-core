<?php

namespace DevBoardLib\GithubCore\Milestone;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class GithubMilestoneId.
 */
class GithubMilestoneId implements Identifier
{
    /**
     * @var
     */
    private $githubMilestoneId;

    /**
     * IssueId constructor.
     *
     * @param $githubMilestoneId
     */
    public function __construct($githubMilestoneId)
    {
        $this->githubMilestoneId = $githubMilestoneId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->githubMilestoneId;
    }
}
