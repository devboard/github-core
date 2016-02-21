<?php
namespace spec\DevBoardLib\GithubCore\PullRequest;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Milestone\GithubMilestone;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\PullRequest\GithubPullRequestId;
use DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestOpenState;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubPullRequestSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\GithubPullRequestSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\GithubPullRequest');
    }

    public function let(
        GithubPullRequestId $id,
        GithubRepo $repo,
        GithubCommitId $githubCommitId,
        GithubUser $createdByUser,
        GithubUser $assignedToUser,
        GithubMilestone $milestone,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            new GithubPullRequestOpenState(),
            false,
            true,
            'PullRequest title',
            'PullRequest body ...',
            $githubCommitId,
            $createdByUser,
            $assignedToUser,
            $milestone,
            $createdAt,
            $updatedAt,
            $closedAt

        );
    }

    public function it_can_be_assigned_to_nobody(
        $id,
        $repo,
        $githubCommitId,
        $createdByUser,
        $milestone = null,
        $createdAt,
        $updatedAt,
        $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            new GithubPullRequestOpenState(),
            false,
            true,
            'PullRequest title',
            'PullRequest body ...',
            $githubCommitId,
            $createdByUser,
            null,
            $milestone,
            $createdAt,
            $updatedAt,
            $closedAt

        );

        $this->getAssignedToUserId()->shouldReturn(null);
        $this->getAssignedToUser()->shouldReturn(null);
    }

    public function it_can_be_without_milestone(
        $id,
        $repo,
        $githubCommitId,
        $createdByUser,
        $assignedToUser,
        $createdAt,
        $updatedAt,
        $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            new GithubPullRequestOpenState(),
            false,
            true,
            'PullRequest title',
            'PullRequest body ...',
            $githubCommitId,
            $createdByUser,
            $assignedToUser,
            null,
            $createdAt,
            $updatedAt,
            $closedAt

        );

        $this->getMilestoneId()->shouldReturn(null);
        $this->getMilestone()->shouldReturn(null);
    }

    public function it_has_github_id_as_primary_key($id)
    {
        $this->getId()->shouldReturn($id);
    }

    public function it_holds_repo_id_it_belongs_to($repo, GithubRepoId $repoId)
    {
        $repo->getId()->willReturn($repoId);
        $this->getRepoId()->shouldReturn($repoId);
    }

    public function it_holds_repo_it_belongs_to($repo)
    {
        $this->getRepo()->shouldReturn($repo);
    }

    public function it_holds_pull_request_number()
    {
        $this->getNumber()->shouldReturn(22);
    }

    public function it_holds_pull_request_state()
    {
        $this->getState()->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestState');
    }

    public function it_knows_if_pull_request_is_locked()
    {
        $this->isLocked()->shouldReturn(false);
    }

    public function it_knows_if_pull_request_is_merged()
    {
        $this->isMerged()->shouldReturn(true);
    }

    public function it_holds_title()
    {
        $this->getTitle()->shouldReturn('PullRequest title');
    }

    public function it_holds_body()
    {
        $this->getBody()->shouldReturn('PullRequest body ...');
    }

    public function it_exposes_last_commit($githubCommitId)
    {
        $this->getLastCommitId()->shouldReturn($githubCommitId);
    }

    public function it_knows_who_created_pull_request($createdByUser)
    {
        $this->getCreatedByUser()->shouldReturn($createdByUser);
    }

    public function it_knows_id_who_created_pull_request($createdByUser, GithubUserId $createdByUserId)
    {
        $createdByUser->getGithubUserId()->willReturn($createdByUserId);
        $this->getCreatedByUserId()->shouldReturn($createdByUserId);
    }

    public function it_knows_who_is_assigned_to_pull_request($assignedToUser)
    {
        $this->getAssignedToUser()->shouldReturn($assignedToUser);
    }

    public function it_knows_id_of_user_who_is_assigned_to_pull_request($assignedToUser, GithubUserId $assignedToUserId)
    {
        $assignedToUser->getGithubUserId()->willReturn($assignedToUserId);

        $this->getAssignedToUserId()->shouldReturn($assignedToUserId);
    }

    public function it_knows_id_of_pull_request_is_assigned_to_a_milestone($milestone, GithubMilestoneId $milestoneId)
    {
        $milestone->getId()->willReturn($milestoneId);
        $this->getMilestoneId()->shouldReturn($milestoneId);
    }

    public function it_knows_if_pull_request_is_assigned_to_a_milestone($milestone)
    {
        $this->getMilestone()->shouldReturn($milestone);
    }

    public function it_knows_time_when_created_on_github($createdAt)
    {
        $this->getGithubCreatedAt()->shouldReturn($createdAt);
    }

    public function it_knows_time_when_last_updated_on_github($updatedAt)
    {
        $this->getGithubUpdatedAt()->shouldReturn($updatedAt);
    }

    public function it_knows_time_when_pull_request_was_closed($closedAt)
    {
        $this->getGithubClosedAt()->shouldReturn($closedAt);
    }
}
