<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Milestone\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubMilestoneClosedStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\State\GithubMilestoneClosedState');
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\State\GithubMilestoneState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('closed');
    }
}
