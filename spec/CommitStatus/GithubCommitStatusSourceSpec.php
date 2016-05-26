<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\GithubCommitStatus;
use DevBoardLib\GithubCore\CommitStatus\GithubCommitStatusId;
use DevBoardLib\GithubCore\CommitStatus\State;
use DevBoardLib\GithubCore\ExternalServices\ExternalService;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitStatusSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\GithubCommitStatusSource');
        $this->shouldHaveType(GithubCommitStatus::class);
    }

    public function let(
        GithubCommitStatusId $id,
        GithubRepoId $githubRepoId,
        GithubCommitId $commitId,
        ExternalService $externalService,
        State $state,
        DateTime $createdAt,
        DateTime $updatedAt
    ) {
        $this->beConstructedWith(
            $id,
            $githubRepoId,
            $commitId,
            $externalService,
            'description',
            'target-url',
            $state,
            $createdAt,
            $updatedAt
        );
    }

    public function it_has_id($id)
    {
        $this->getId()->shouldReturn($id);
    }

    public function it_has_github_repo_id($githubRepoId)
    {
        $this->getGithubRepoId()->shouldReturn($githubRepoId);
    }

    public function it_has_github_commit_id($commitId)
    {
        $this->getCommitId()->shouldReturn($commitId);
    }

    public function it_has_external_service($externalService)
    {
        $this->getExternalService()->shouldReturn($externalService);
    }

    public function it_has_description()
    {
        $this->getDescription()->shouldReturn('description');
    }

    public function it_has_target_url_to_report()
    {
        $this->getTargetUrl()->shouldReturn('target-url');
    }

    public function it_has_state($state)
    {
        $this->getState()->shouldReturn($state);
    }

    public function it_knows_when_was_it_created($createdAt)
    {
        $this->getCreatedAt()->shouldReturn($createdAt);
    }

    public function it_knows_when_was_last_updated_at($updatedAt)
    {
        $this->getUpdatedAt()->shouldReturn($updatedAt);
    }
}
