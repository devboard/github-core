<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Commit\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitFailureStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\State\GithubCommitFailureState');
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\State\GithubCommitState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('failure');
    }
}
