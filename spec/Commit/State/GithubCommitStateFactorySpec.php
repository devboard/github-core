<?php

namespace spec\DevBoardLib\GithubCore\Commit\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitStateFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\State\GithubCommitStateFactory');
    }

    public function it_will_create_pending_commit_state_instance()
    {
        $this->create('pending')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Commit\State\GithubCommitPendingState');
    }

    public function it_will_create_success_commit_state_instance()
    {
        $this->create('success')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Commit\State\GithubCommitSuccessState');
    }

    public function it_will_create_failure_commit_state_instance()
    {
        $this->create('failure')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Commit\State\GithubCommitFailureState');
    }

    public function it_will_create_error_commit_state_instance()
    {
        $this->create('error')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Commit\State\GithubCommitErrorState');
    }

    public function it_will_throw_exception_if_unsupported_value_comes_to_create()
    {
        $this->shouldThrow('\Exception')->during('create', ['unsupported-value']);
    }
}
