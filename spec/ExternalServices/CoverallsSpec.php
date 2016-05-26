<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoverallsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\ExternalServices\Coveralls');
        $this->shouldHaveType(ExternalService::class);
    }

    public function it_is_convertable_to_string()
    {
        $this->__toString()->shouldReturn('coverage/coveralls');
    }
}
