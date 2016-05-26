<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\ExternalService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScrutinizerCiSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\ExternalServices\ScrutinizerCi');
        $this->shouldHaveType(ExternalService::class);
    }

    public function it_is_convertable_to_string()
    {
        $this->__toString()->shouldReturn('Scrutinizer');
    }
}
