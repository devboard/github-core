<?php

namespace spec\DevBoardLib\GithubCore\External;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExternalServiceIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\External\ExternalServiceId');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let()
    {
        $this->beConstructedWith(123);
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123');
    }
}
