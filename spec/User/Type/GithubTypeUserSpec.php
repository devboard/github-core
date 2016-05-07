<?php

namespace spec\DevBoardLib\GithubCore\User\Type;

use DevBoardLib\GithubCore\User\Type\GithubType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubTypeUserSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\User\Type\GithubTypeUser');
        $this->shouldHaveType(GithubType::class);
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('User');
    }
}
