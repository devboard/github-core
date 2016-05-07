<?php

namespace spec\DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\Tag\GithubTag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubTagSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Tag\GithubTagSource');
        $this->shouldHaveType(GithubTag::class);
    }

    public function let(GithubRepoId $githubRepoId, GithubCommit $githubCommit)
    {
        $this->beConstructedWith($githubRepoId, 'v0.1.2', $githubCommit);
    }

    public function it_holds_tag_name()
    {
        $this->getName()->shouldReturn('v0.1.2');
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
