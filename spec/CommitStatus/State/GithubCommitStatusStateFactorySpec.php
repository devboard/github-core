<?php
namespace spec\DevBoardLib\GithubCore\CommitStatus\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitStatusStateFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusStateFactory');
    }

    public function it_will_create_pending_commit_state_instance()
    {
        $this->create('pending')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusPendingState');
    }

    public function it_will_create_success_commit_state_instance()
    {
        $this->create('success')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusSuccessState');
    }

    public function it_will_create_failure_commit_state_instance()
    {
        $this->create('failure')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusFailureState');
    }

    public function it_will_create_error_commit_state_instance()
    {
        $this->create('error')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusErrorState');
    }

    public function it_will_throw_exception_if_unsupported_value_comes_to_create()
    {
        $this->shouldThrow('\Exception')->during('create', ['unsupported-value']);
    }
}
