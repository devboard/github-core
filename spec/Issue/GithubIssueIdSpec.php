<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Issue;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubIssueIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Issue\GithubIssueId');
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
