<?php
namespace spec\DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Branch\GithubBranchId;
use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Repo\GithubRepo;
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

    public function let(
        GithubBranchId $githubBranchId,
        GithubRepo $githubRepo,
        GithubCommit $githubCommit,
        GithubRepoId $githubRepoId,
        GithubCommitId $githubCommitId
    ) {
        $githubRepo->getId()->willReturn($githubRepoId);
        $githubCommit->getId()->willReturn($githubCommitId);

        $this->beConstructedWith($githubBranchId, $githubRepo, 'master', $githubCommit);
    }

    public function it_has_id_for_primary_key($githubBranchId)
    {
        $this->getId()->shouldReturn($githubBranchId);
    }

    public function it_holds_branch_name()
    {
        $this->getName()->shouldReturn('master');
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
