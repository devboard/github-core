<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubUserIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\User\GithubUserId');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let()
    {
        $this->beConstructedWith(123);
    }

    public function it_gives_access_to_id()
    {
        $this->getId()->shouldReturn(123);
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123');
    }
}
