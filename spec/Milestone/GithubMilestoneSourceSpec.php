<?php

namespace spec\DevBoardLib\GithubCore\Milestone;

use DateTime;
use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;
use DevBoardLib\GithubCore\Milestone\State\GithubMilestoneOpenState;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubMilestoneSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\GithubMilestoneSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\GithubMilestone');
    }

    public function let(
        GithubMilestoneId $id,
        GithubRepo $repo,
        GithubMilestoneOpenState $state,
        GithubUser $createdByUser,
        DateTime $dueDate,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            $state,
            'Milestone title',
            'Milestone desc ...',
            $createdByUser,
            32,
            43,
            $dueDate,
            $createdAt,
            $updatedAt,
            $closedAt
        );
    }

    public function it_can_be_constructed_without_due_date(
        $id,
        $repo,
        $state,
        $createdByUser,
        $createdAt,
        $updatedAt,
        DateTime $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            $state,
            'title',
            'desc ...',
            $createdByUser,
            32,
            43,
            null,
            $createdAt,
            $updatedAt,
            $closedAt
        );
    }

    public function it_can_be_constructed_without_creator(
        $id,
        $repo,
        $state,
        $dueDate,
        $createdAt,
        $updatedAt,
        $closedAt
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            22,
            $state,
            'Milestone title',
            'Milestone desc ...',
            null,
            32,
            43,
            $dueDate,
            $createdAt,
            $updatedAt,
            $closedAt
        );

        $this->getCreatedByUser()->shouldReturn(null);
        $this->getCreatedByUserId()->shouldReturn(null);
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

    public function it_holds_milestone_number()
    {
        $this->getNumber()->shouldReturn(22);
    }

    public function it_holds_milestone_state()
    {
        $this->getState()
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Milestone\State\GithubMilestoneState');
    }

    public function it_holds_title()
    {
        $this->getTitle()->shouldReturn('Milestone title');
    }

    public function it_holds_body()
    {
        $this->getDescription()->shouldReturn('Milestone desc ...');
    }

    public function it_knows_who_created_milestone($createdByUser, GithubUserId $createdByUserId)
    {
        $createdByUser->getGithubUserId()->willReturn($createdByUserId);
        $this->getCreatedByUserId()->shouldReturn($createdByUserId);
    }

    public function it_knows_open_issue_count()
    {
        $this->getOpenIssueCount()->shouldReturn(32);
    }

    public function it_knows_closed_issue_count()
    {
        $this->getClosedIssueCount()->shouldReturn(43);
    }

    public function it_knows_time_when_milestone_is_due($dueDate)
    {
        $this->getDueDate()->shouldReturn($dueDate);
    }

    public function it_knows_time_when_created_on_github($createdAt)
    {
        $this->getGithubCreatedAt()->shouldReturn($createdAt);
    }

    public function it_knows_time_when_last_updated_on_github($updatedAt)
    {
        $this->getGithubUpdatedAt()->shouldReturn($updatedAt);
    }

    public function it_knows_time_when_milestone_was_closed($closedAt)
    {
        $this->getGithubClosedAt()->shouldReturn($closedAt);
    }
}
