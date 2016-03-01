<?php

namespace spec\DevBoardLib\GithubCore\Issue;

use DateTime;
use DevBoardLib\GithubCore\Issue\GithubIssueId;
use DevBoardLib\GithubCore\Issue\State\GithubIssueOpenState;
use DevBoardLib\GithubCore\Milestone\GithubMilestone;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubIssueSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\GithubIssueSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\GithubIssue');
    }

    public function let(
        GithubIssueId $id,
        GithubRepo $repo,
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
            new GithubIssueOpenState(),
            'Issue title',
            'Issue body ...',
            $createdByUser,
            $assignedToUser,
            $milestone,
            123,
            $createdAt,
            $updatedAt,
            $closedAt

        );
    }

    public function it_can_be_assigned_to_nobody(
        $id,
        $repo,
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
            new GithubIssueOpenState(),
            'Issue title',
            'Issue body ...',
            $createdByUser,
            null,
            $milestone,
            123,
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
            new GithubIssueOpenState(),
            'Issue title',
            'Issue body ...',
            $createdByUser,
            $assignedToUser,
            null,
            123,
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

    public function it_holds_issue_number()
    {
        $this->getNumber()->shouldReturn(22);
    }

    public function it_holds_issue_state()
    {
        $this->getState()->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Issue\State\GithubIssueState');
    }

    public function it_holds_title()
    {
        $this->getTitle()->shouldReturn('Issue title');
    }

    public function it_holds_body()
    {
        $this->getBody()->shouldReturn('Issue body ...');
    }

    public function it_knows_who_created_issue($createdByUser)
    {
        $this->getCreatedByUser()->shouldReturn($createdByUser);
    }

    public function it_knows_id_who_created_issue($createdByUser, GithubUserId $createdByUserId)
    {
        $createdByUser->getGithubUserId()->willReturn($createdByUserId);
        $this->getCreatedByUserId()->shouldReturn($createdByUserId);
    }

    public function it_knows_who_is_assigned_to_issue($assignedToUser)
    {
        $this->getAssignedToUser()->shouldReturn($assignedToUser);
    }

    public function it_knows_id_of_user_who_is_assigned_to_issue($assignedToUser, GithubUserId $assignedToUserId)
    {
        $assignedToUser->getGithubUserId()->willReturn($assignedToUserId);

        $this->getAssignedToUserId()->shouldReturn($assignedToUserId);
    }

    public function it_knows_id_of_issue_is_assigned_to_a_milestone($milestone, GithubMilestoneId $milestoneId)
    {
        $milestone->getId()->willReturn($milestoneId);
        $this->getMilestoneId()->shouldReturn($milestoneId);
    }

    public function it_knows_if_issue_is_assigned_to_a_milestone($milestone)
    {
        $this->getMilestone()->shouldReturn($milestone);
    }

    public function it_knows_number_of_comments_on_issue()
    {
        $this->getCommentCount()->shouldReturn(123);
    }

    public function it_knows_time_when_created_on_github($createdAt)
    {
        $this->getGithubCreatedAt()->shouldReturn($createdAt);
    }

    public function it_knows_time_when_last_updated_on_github($updatedAt)
    {
        $this->getGithubUpdatedAt()->shouldReturn($updatedAt);
    }

    public function it_knows_time_when_issue_was_closed($closedAt)
    {
        $this->getGithubClosedAt()->shouldReturn($closedAt);
    }
}
