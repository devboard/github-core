<?php
namespace spec\DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\Tag\GithubTagId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubTagSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Tag\GithubTagSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\Tag\GithubTag');
    }

    public function let(
        GithubTagId $githubTagId,
        GithubRepo $githubRepo,
        GithubCommit $githubCommit,
        GithubRepoId $githubRepoId,
        GithubCommitId $githubCommitId
    ) {
        $githubRepo->getId()->willReturn($githubRepoId);
        $githubCommit->getId()->willReturn($githubCommitId);

        $this->beConstructedWith($githubTagId, $githubRepo, '0.6.3', $githubCommit);
    }

    public function it_has_id_for_primary_key($githubTagId)
    {
        $this->getId()->shouldReturn($githubTagId);
    }

    public function it_holds_tag_name()
    {
        $this->getName()->shouldReturn('0.6.3');
    }

    public function it_exposes_repo_it_belongs_to($githubRepo, $githubRepoId)
    {
        $this->getRepoId()->shouldReturn($githubRepoId);
        $this->getRepo()->shouldReturn($githubRepo);
    }

    public function it_exposes_last_commit($githubCommit, $githubCommitId)
    {
        $this->getLastCommitId()->shouldReturn($githubCommitId);
        $this->getLastCommit()->shouldReturn($githubCommit);
    }
}
