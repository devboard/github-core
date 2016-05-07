<?php

namespace spec\DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubBranchSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Branch\GithubBranchSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\Branch\GithubBranch');
    }

    public function let(GithubRepoId $githubRepoId, GithubCommit $githubCommit)
    {
        $this->beConstructedWith($githubRepoId, 'master', $githubCommit);
    }

    public function it_holds_branch_name()
    {
        $this->getName()->shouldReturn('master');
    }

    public function it_exposes_repo_it_belongs_to($githubRepoId)
    {
        $this->getGithubRepoId()->shouldReturn($githubRepoId);
    }

    public function it_exposes_last_commit($githubCommit)
    {
        $this->getLastCommit()->shouldReturn($githubCommit);
    }
}
