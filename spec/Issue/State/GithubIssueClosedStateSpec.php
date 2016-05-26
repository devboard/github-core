<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Issue\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubIssueClosedStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\State\GithubIssueClosedState');
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\State\GithubIssueState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('closed');
    }
}
