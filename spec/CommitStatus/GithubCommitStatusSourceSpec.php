<?php

namespace spec\DevBoardLib\GithubCore\CommitStatus;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\CommitStatus\GithubCommitStatusId;
use DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusState;
use DevBoardLib\GithubCore\External\ExternalService;
use DevBoardLib\GithubCore\External\ExternalServiceId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitStatusSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\GithubCommitStatusSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\GithubCommitStatus');
    }

    public function let(
        GithubCommitStatusId $id,
        GithubCommitId $githubCommitId,
        ExternalServiceId $githubExternalServiceId,
        GithubCommitStatusState $githubState,
        DateTime $githubCreatedAt,
        DateTime $githubUpdatedAt
    ) {
        $this->beConstructedWith(
            $id,
            $githubCommitId,
            $githubExternalServiceId,
            'description',
            'target-url',
            $githubState,
            $githubCreatedAt,
            $githubUpdatedAt
        );
    }

    public function it_has_id_of_last_received_status($id)
    {
        $this->getLastReceivedGithubStatusId()->shouldReturn($id);
    }

    public function it_has_github_commit_id($githubCommitId)
    {
        $this->getGithubCommitId()->shouldReturn($githubCommitId);
    }

    public function it_has_external_service_id($githubExternalServiceId)
    {
        $this->getGithubExternalServiceId()->shouldReturn($githubExternalServiceId);
    }

    public function it_has_description()
    {
        $this->getDescription()->shouldReturn('description');
    }

    public function it_has_target_url_to_report()
    {
        $this->getTargetUrl()->shouldReturn('target-url');
    }

    public function it_has_state($githubState)
    {
        $this->getGithubState()->shouldReturn($githubState);
    }

    public function it_knows_when_was_it_created($githubCreatedAt)
    {
        $this->getGithubCreatedAt()->shouldReturn($githubCreatedAt);
    }

    public function it_knows_when_was_last_updated_at($githubUpdatedAt)
    {
        $this->getGithubUpdatedAt()->shouldReturn($githubUpdatedAt);
    }
}
