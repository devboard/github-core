<?php

namespace spec\DevBoardLib\GithubCore\PullRequest\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubPullRequestStateFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestStateFactory');
    }

    public function it_will_create_open_issue_state_instance()
    {
        $this->create('open')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestOpenState');
    }

    public function it_will_create_closed_issue_state_instance()
    {
        $this->create('closed')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestClosedState');
    }

    public function it_will_throw_exception_if_unsupported_value_comes_to_create()
    {
        $this->shouldThrow('\Exception')->during('create', ['unsupported-value']);
    }
}
