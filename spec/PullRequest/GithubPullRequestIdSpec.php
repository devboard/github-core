<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\PullRequest;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubPullRequestIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\GithubPullRequestId');
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
