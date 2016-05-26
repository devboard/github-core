<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\CommitStatus\State;

use DevBoardLib\GithubCore\CommitStatus\State;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ErrorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\State\Error');
        $this->shouldHaveType(State::class);
    }

    public function it_is_convertable_to_string()
    {
        $this->__toString()->shouldReturn('error');
    }
}
