<?php
namespace spec\DevBoardLib\GithubCore\Milestone\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubMilestoneOpenStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\State\GithubMilestoneOpenState');
        $this->shouldHaveType('DevBoardLib\GithubCore\Milestone\State\GithubMilestoneState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('open');
    }
}
