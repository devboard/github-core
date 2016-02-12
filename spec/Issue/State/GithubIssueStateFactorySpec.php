<?php
namespace spec\DevBoardLib\GithubCore\Issue\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubIssueStateFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\State\GithubIssueStateFactory');
    }

    public function it_will_create_open_issue_state_instance()
    {
        $this->create('open')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Issue\State\GithubIssueOpenState');
    }

    public function it_will_create_closed_issue_state_instance()
    {
        $this->create('closed')
            ->shouldReturnAnInstanceOf('DevBoardLib\GithubCore\Issue\State\GithubIssueClosedState');
    }

    public function it_will_throw_exception_if_unsupported_value_comes_to_create()
    {
        $this->shouldThrow('\Exception')->during('create', ['unsupported-value']);
    }
}
