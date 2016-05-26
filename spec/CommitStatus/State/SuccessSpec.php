<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\CommitStatus\State;

use DevBoardLib\GithubCore\CommitStatus\State;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SuccessSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\State\Success');
        $this->shouldHaveType(State::class);
    }

    public function it_is_convertable_to_string()
    {
        $this->__toString()->shouldReturn('success');
    }
}
