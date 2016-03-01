<?php

namespace spec\DevBoardLib\GithubCore\Issue\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubIssueOpenStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\State\GithubIssueOpenState');
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\State\GithubIssueState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('open');
    }
}
